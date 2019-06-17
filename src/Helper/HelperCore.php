<?php

/**
 * Created by PhpStorm.
 * User: ZhuoBin
 * Date: 2019/6/17
 * Time: 上午10:43
 */
namespace Zhuobin\src\Helper;

use Illuminate\Support\ServiceProvider;


class HelperCore extends ServiceProvider
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
    }
}