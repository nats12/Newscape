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
* Create the database in your local environment and modify your .env file accordingly 
    * You will also need to add the following four lines with the data from your twitter application page:
    * `TWITTER_CONSUMER_KEY=`
    * `TWITTER_CONSUMER_SECRET=`
    * `TWITTER_ACCESS_TOKEN=`
    * `TWITTER_ACCESS_TOKEN_SECRET=`
* Run `npm run watch`
* Run `php artisan migrate`


##### Installation for development use without MAMP
* Follow the steps above except the second point, and instead run `php artisan serve` at the end 


