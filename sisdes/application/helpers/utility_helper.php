<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('get_external_ip')) {
    function get_external_ip()
    {
        // Batasi waktu mencoba
        $options = stream_context_create(array(
            'http' =>
            array(
                'timeout' => 2 //2 seconds
            )
        ));
        $externalContent = file_get_contents('http://checkip.dyndns.com/', false, $options);
        preg_match('/\b(?:\d{1,3}\.){3}\d{1,3}\b/', $externalContent, $m);
        $externalIp = $m[0];
        return $externalIp;
    }
}

if (!function_exists('d')) {
    function d($x)
    {
        return die(json_encode($x));
    }
}

//FUNCTION INI BELUM BERJALAN DENGAN BAIK
if (!function_exists('e')) {
    function e($data)
    {
        return isset($data) ? $data : "";
    }
}

if (!function_exists('generator')) {
    function generator($length = 7)
    {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }
}
