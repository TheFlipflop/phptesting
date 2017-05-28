<?php

class Request
{
    public static function uri()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return parseUrl($path);
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}