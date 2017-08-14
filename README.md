# Newscape

## Background

[Newscape](http://newscape.herokuapp.com/) is a collaboration between [Natalie McLaren](https://github.com/nats12) and [Jason Lai](https://github.com/laij84). As we had both been learning ReactJS and Laravel in the months leading up to this project, we decided that we wanted to work together on a project combining both technologies.

## About Newscape

Newscape fuses the [Twitter API for Laravel](https://github.com/thujohn/twitter) with [News Api](https://newsapi.org) to give users a personalised dashboard with their favourite news sources alongside their Twitter feed. Users can save their preferences and share their favourite news articles on Twitter.

![](public/images/readme/newscape.png?raw=true)

## Development

### Planning
At the start of this project the group met to compile a list of features that we wanted the website to have and what would be necessary to achieve MVP. 

Once we identified the key features of our application, we had to decide on the technology stack required to achieve this. Although it may have made more sense to use Vue.js (as this comes pre-packaged with Laravel), we really wanted to use this project as an opportunity to develop our knowledge of ReactJS.

##### Tech Stack
* [ReactJS](https://facebook.github.io/react/)
* [Foundation](http://foundation.zurb.com/)
* [Laravel](https://laravel.com/)
* [Webpack](https://webpack.js.org/) / [Laravel-Mix](https://laravel.com/docs/5.4/mix)
* [MySQL](https://www.mysql.com/)
* [Twitter API for Laravel](https://github.com/thujohn/twitter)
* [News Api](https://newsapi.org)

We also conducted a discovery process to identify any limitations or blockers of the News Api we were planning to use. Once we had done this we were able to start planning the Entity Relationship Diagram for the backend database models. 

![](public/images/readme/erd.png?raw=true)

### Design & Wireframing
We briefed our designer [Nick Garratt](https://www.linkedin.com/in/njgarratt/) on the website requirements and he mocked up some wireframes using Adobe Photoshop.

![](public/images/readme/designs.jpg?raw=true)

## Installation 

* Clone repository
* Set up the host 'newscape.dev' and point the root to the application's 'public' folder (e.g. using [MAMP](https://www.mamp.info) or similar)
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
* Follow the steps above except the second point, and instead run `php artisan serve` at the end. 


