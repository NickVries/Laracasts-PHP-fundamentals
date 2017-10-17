<?php

class Request
{
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }

    public static function baseUrl()
    {
        return 'http://'.$_SERVER['HTTP_HOST'];
    }
}
