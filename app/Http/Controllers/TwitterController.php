<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Twitter;
use Session;
use Redirect;
use App\User;
use App\Category;
use App\Source;
use App\Language;
use Cache;
use NewsApi;
use \stdClass;

class TwitterController extends Controller
{

	/**
	 * [accessVariables description]
	 * @return [type] [description]
	 */
	public function accessVariables() 
  	{
	    // $newsSources = Cache::remember('news_sources', 60, function () {
	    //   return NewsApi::getSources();
	    // });

  		// Fetch news sources
	    $newsSources = NewsApi::getSources();

	    // $newsArticles = Cache::remember('news_articles', 60, function () {
	    //   $articles = [];
	    //   foreach ($newsSources["sources"] as $source) {
	    //     $articleArray = NewsApi::getArticles($source["id"])["articles"];
	    //     foreach($articleArray as $article) {
	    //       $object = new stdClass();
	    //       foreach ($article as $key => $value)
	    //       {
	    //         $object->$key = $value;
	    //       }
	    //       array_push($articles, $object);
	    //     }
	    //   }
	    //   return $articles;
	    // });

	    // Instantiate articles array
	    $articles = [];

	    foreach ($newsSources["sources"] as $source) 
	    {
	      $articleArray = NewsApi::getArticles($source["id"])["articles"];

	      foreach($articleArray as $article) 
	      {	// Create new article object
	        $articleObject = new stdClass();

	        // Add new properties to the article object
	        $articleObject->sourceId = $source['id'];
	        $articleObject->sourceName = $source['name'];
          $articleObject->sourceCategory = $source['category'];
          $articleObject->sourceLanguage = $source['language'];

	        foreach ($article as $key => $value)
	        {
	          $articleObject->$key = $value;
	        }
	        // Push the article objects into the articles array
	        array_push($articles, $articleObject);
	      }
	    }

	    // Reassign to make use of $newsarticles 
	    $newsArticles = $articles;
	  
	    if (Auth::check()) {
	      $user = Auth::user();

        $userCategories = $user->categories;
        $userSources = $user->sources;
        $userLanguages = $user->languages;
	    }
	    else {
	      $user = null;


        $userCategories = [];
        $userSources = [];
        $userLanguages = [];
	    }

	    // Instantiate timeline array
	    $timeline = [];

	    // Only show timeline IF user has logged in, otherwise, default to showing just news articles.
	    if (Auth::check()) {
	      $timeline = Cache::remember('timeline_' . auth()->user()->twitter_id, 
	          1, function () {
	          return Twitter::getHomeTimeline(['count' => 25]);
	      });
	    }

	    // Assign routes to variables 
	    $loginPage = route('twitterLogin');
	    $logoutPage = route('twitterLogout');

      //all data
      $categories = Category::all();
      $sources = Source::all();
      $languages = Language::all();

      //user data

		return view('welcome', compact('loginPage', 'logoutPage', 'timeline', 'newsSources', 'newsArticles', 'user', 'categories', 'sources', 'languages', 'userCategories', 'userSources', 'userLanguages'));
	}

    /**
     * [twitterLogIn description]
     * @return [type] [description]
     */
    public function twitterLogIn() 
    {
    	// your SIGN IN WITH TWITTER  button should point to this route
  		$sign_in_twitter = true;
  		$force_login = false;

  		// Make sure we make this request w/o tokens, overwrite the default values in case of login.
  		Twitter::reconfig(['token' => '', 'secret' => '']);
  		$token = Twitter::getRequestToken(route('callback'));

  		if (isset($token['oauth_token_secret']))
  		{
  			$url = Twitter::getAuthorizeURL($token, $sign_in_twitter, $force_login);

  			Session::put('oauth_state', 'start');
  			Session::put('oauth_request_token', $token['oauth_token']);
  			Session::put('oauth_request_token_secret', $token['oauth_token_secret']);

  			return Redirect::to($url);
  		}

  		return Redirect::route('twitter.error');
    }





    /**
     * [twitterCallBack description]
     * @return [type] [description]
     */
    public function twitterCallBack() 
    {
      // You should set this route on your Twitter Application settings as the callback
  		// https://apps.twitter.com/app/YOUR-APP-ID/settings
  		if (Session::has('oauth_request_token'))
  		{
  			$request_token = [
  				'token'  => Session::get('oauth_request_token'),
  				'secret' => Session::get('oauth_request_token_secret'),
  			];

  			Twitter::reconfig($request_token);

  			$oauth_verifier = false;

  			if (Input::has('oauth_verifier'))
  			{
  				$oauth_verifier = Input::get('oauth_verifier');
  				// getAccessToken() will reset the token for you
  				$token = Twitter::getAccessToken($oauth_verifier);
  			}

  			if (!isset($token['oauth_token_secret']))
  			{
  				return Redirect::route('twitter.error')->with('flash_error', 'We could not log you in on Twitter.');
  			}

  			$credentials = Twitter::getCredentials(['include_email' => 'true',]);

  			if (is_object($credentials) && !isset($credentials->error))
  			{
  				// $credentials contains the Twitter user object with all the info about the user.

                  $user = User::where('twitter_id', $credentials->id_str)->first();

                  if(!$user) {
                      $user = User::create([
                          'twitter_id' => $credentials->id_str,
                          'name' => $credentials->name,
                          'email' => $credentials->email,
                          'handle' => $credentials->screen_name
                      ]);
                  };

                  Auth::login($user);
  				// Add here your own user logic, store profiles, create new users on your tables...you name it!
  				// Typically you'll want to store at least, user id, name and access tokens
  				// if you want to be able to call the API on behalf of your users.

  				// This is also the moment to log in your users if you're using Laravel's Auth class

  				Session::put('access_token', $token);

  				return Redirect::to('/')->with('flash_notice', 'Congrats! You\'ve successfully signed in!');
  			}

  			return Redirect::route('twitter.error')->with('flash_error', 'Crap! Something went wrong while signing you up!');
  		}
    }





    /**
     * [twitterLogOut description]
     * @return [type] [description]
     */
    public function twitterLogOut() 
    {

    	Session::forget('access_token');

      Auth::logout();

		  return Redirect::to('/')->with('flash_notice', 'You\'ve successfully logged out!');
    }





    /**
     * [twitterNewsFeed description]
     * @return [type] [description]
     */
    public function twitterNewsFeed() 
    {
        
    	$timeline = Twitter::getHomeTimeline(['count' => 25]);

      return response()->json(Twitter::getCredentials(['include_email' => 'true',]));
    }

    public function tweetArticle(Request $request) {

      $tweet = $request->tweetBody." ".$request->tweetUrl;
      
      Twitter::postTweet(['status' => $tweet]);

      return response()->json(['status' => $tweet], 201);
    }

    public function getTimeline()
    {
      $timeline = Twitter::getHomeTimeline(['count' => 25]);

      $response = ['timeline' => $timeline];

      return response()->json($response, 200);
    }

    /**
     * [error description]
     * @return [type] [description]
     */
    public function error() 
    {

    	return 'Oops something went wrong!';
    }


}
