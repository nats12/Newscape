<?php

namespace App\Libraries\NewsApi\Facades;

use Illuminate\Support\Facades\Facade;

class NewsApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return \App\Libraries\NewsApi\NewsApi::class; }
}