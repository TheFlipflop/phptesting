<?php

class Request
{
    public static function uri()
    {
        return parseUrl($_SERVER['REQUEST_URI']);
    }
}