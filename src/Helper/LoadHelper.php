<?php
/**
 * Created by PhpStorm.
 * User: ZhuoBin
 * Date: 2019/6/17
 * Time: 上午10:45
 * 加载辅佐函数
 */

if (!function_exists('load_helper')) {
    function load_helper($helper_name)
    {
        return app()->make('helper')->load_helper($helper_name);
    }
}


/**
 * 获取毫秒级别的时间戳
 */
if (!function_exists('get_msectime')) {
    function get_msectime()
    {
        list($msec, $sec) = explode(' ', microtime());
        $msectime = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
        return (int)$msectime;
    }
}

/**
 * 毫秒转日期
 * @params $msectime int 毫秒时间戳
 */
if (!function_exists('get_msec_to_mescdate')) {
    function get_msec_to_mescdate($msectime, $format = "Y-m-d H:i:s.x")
    {
        $msectime = $msectime * 0.001;
        if (strstr($msectime, '.')) {
            sprintf("%01.3f", $msectime);
            list($usec, $sec) = explode(".", $msectime);
            $sec = str_pad($sec, 3, "0", STR_PAD_RIGHT);
        } else {
            $usec = $msectime;
            $sec = "000";
        }
        $date = date($format, $usec);
        return $mescdate = str_replace('x', $sec, $date);
    }
}