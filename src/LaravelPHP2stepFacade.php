<?php

namespace briyanadityatama\laravelphp2step;

use Illuminate\Support\Facades\Facade;

class LaravelPHP2stepFacade extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return LaravelPHP2step::class;
    }
}
