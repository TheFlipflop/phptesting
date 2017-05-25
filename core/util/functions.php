<?php

function dd($output)
{
    echo '<pre>';
    var_dump($output);
    echo '</pre>';
    die;
}

function parseUrl($str) {

    $prefix = '/learn';

    $ret = '';

    if (substr($str, 0, strlen($prefix)) == $prefix) {
        $ret = substr($str, strlen($prefix));
    }

    $ret = trim($ret, '/');


    $ret = ( strlen($ret) > 0 ) ? $ret : '';

    return $ret;
}
