<?php

use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Support\Facades\Storage;

if (!function_exists('get_full_time')) {
    function get_full_time($date, $format = 'd, M Y h:i A')
    {
        $new_date = new \DateTime($date);
        return $new_date->format($format);
    }
}

if (!function_exists('get_date')) {
    function get_date($date, $format = 'd M Y')
    {
        return get_full_time($date, $format);
    }
}

if (!function_exists('hashids_encode')) {
    function hashids_encode($str)
    {
        return Hashids::encode($str);
    }
}

if (!function_exists('hashids_decode')) {
    function hashids_decode($str)
    {
        try {
            return Hashids::decode($str)[0];
        } catch (Exception $e) {
            return abort(404);
        }
    }
}

function format_cnic($str){
    if(strlen($str) < 13){
        return '-';
    }
    $str = substr_replace($str, '-', 5, 0);
    $str = substr_replace($str, '-', -1, 0);
    return $str;
}
