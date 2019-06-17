<?php
namespace zhuobin\Laravel\token;

use App\Exceptions\ApiException;
use Illuminate\Support\Arr;
use \Firebase\JWT\JWT;


class token
{
    /**
     * 创造token
     */
    public function createToken(){
        $token =

        return $token;
    }

    /**
     * @return array
     */
    public function init()
    {
        $token = self::createToken();
        return array(
            'result' => true,
            'token' => $token['token'],
            'sk' => $token['sk'],
            'is_sign' => $token['is_sign'],
            'expires_time' => time() + $token['expires_time'] * 60
        );
    }
}