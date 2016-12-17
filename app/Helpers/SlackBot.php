<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 6/9/15
 * Time: 11:50 AM
 */
namespace App\Helpers;
use GuzzleHttp\Client;

class SlackBot {

    public static function message($message)
    {
        CurlHelper::post(self::url(), array('payload'=> json_encode(array('text' => $message))));
    }
    public static function url()
    {
        return 'https://hooks.slack.com/services/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';
    }
}