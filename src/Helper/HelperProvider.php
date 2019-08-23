<?php

/**
 * Created by PhpStorm.
 * User: ZhuoBin
 * Date: 2019/6/17
 * Time: 上午10:43
 */
namespace Zhuobin\Src\Helper;

use Illuminate\Support\ServiceProvider;


class HelperProvider extends ServiceProvider
{
    public function boot()
    {
        $this->register();
    }

    public function register()
    {
        //注册helper
        $this->app->singleton('helper', function () {
            return new HelperInstance();
        });

        //实例helper
        $this->app->make('helper');
    }
}