<?php

class Request
{
    public static function uri()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return self::parseUrl($path);
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function parseUrl($str) {

        $prefix = '/learn';

        $ret = '';

        if (substr($str, 0, strlen($prefix)) == $prefix) {
            $ret = substr($str, strlen($prefix));
        }

        $ret = trim($ret, '/');


        $ret = ( strlen($ret) > 0 ) ? $ret : '';

        return $ret;
    }
}