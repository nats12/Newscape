# Newscape

Newscape fuses the [Twitter API for Laravel](https://github.com/thujohn/twitter) with [News Api](https://newsapi.org) to give users a personalised dashboard with their favourite news sources alongside their Twitter feed.

##### Installation for development use with MAMP or similar

* Clone repository
* Set up the host 'newscape.dev' and point the root to the application's 'public' folder
* Run `composer install`
* Run `npm install`
* Generate application key with `php artisan key:gen`
* Go to [https://apps.twitter.com](https://apps.twitter.com) and create the application
    * Make sure you also generate an access token via the 'Keys and Access Tokens' tab
* Go to [https://newsapi.org/](https://newsapi.org/) and register to get an API key.
* Create the database in your local environment
* Copy the `.env.example` file and copy paste its contents into a new `.env` file. Modify the following according to your Twitter/NewsApi application settings ONLY in your `.env` file:
    * `TWITTER_CONSUMER_KEY=`
    * `TWITTER_CONSUMER_SECRET=`
    * `TWITTER_ACCESS_TOKEN=`
    * `TWITTER_ACCESS_TOKEN_SECRET=`
  
    * `NEWSAPI_KEY=`
    * `NEWSAPI_URL=`
* Run `npm run watch`
* Run `php artisan migrate`
* Run `php artisan db:seed`
* `composer dump-autoload` may be required before seeding the database


##### Installation for development use without MAMP
* Follow the steps above except the second point, and instead run `php artisan serve` at the end 


