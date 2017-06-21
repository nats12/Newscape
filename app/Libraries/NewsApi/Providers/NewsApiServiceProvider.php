<?php

namespace App\Libraries\NewsApi\Providers;

use GuzzleHttp\Client;
use App\Libraries\NewsApi\NewsApi;
use Illuminate\Support\ServiceProvider;

class NewsApiServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewsApi::class, function () {
            return new NewsApi(
                config('newsapi.key'),
                config('newsapi.url'),
                new Client
            );
        });
    }
}