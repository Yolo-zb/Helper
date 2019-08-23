<?php

/**
 * Created by PhpStorm.
 * User: ZhuoBin
 * Date: 2019/6/17
 * Time: 上午10:46
 */

namespace Zhuobin\Src\Helper;

class HelperInstance
{
    /**
     * 实例
     * @var array
     */
    private $__helperInstance = array();

    public function __construct()
    {
        // 初始化加载核心辅助函数
        $this->load_helper('LoadHelper');
    }

    /**
     * 加载helper
     * @param $helper_name
     * @return bool
     */
    public function load_helper($helper_name)
    {
        $helper_name = ucfirst($helper_name);//首字母大写

        if (isset($this->__helperInstance[$helper_name])) {
            return true;
        }

        // 加载辅助函数
        if (!file_exists(__DIR__ . '/' . $helper_name . '.php')) {
                return false;
        } else {
            require_once __DIR__ . '/' . $helper_name . '.php';
        }

        // 添加到属性
        $this->__helperInstance[$helper_name] = 1;
        return true;
    }

}