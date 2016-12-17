<?php
namespace App\Helpers;
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 4/10/15
 * Time: 10:43 AM
 */

class NotFound {
    public static function message(){
        $messages = [
            [
                'title' => 'Bro, do you even internets?',
                'body' => ':( We couldn\'t find that page. It was probably my fault (unless you just made up a URL or something) '
            ],[
                'title' => 'Bro, do you even internets?',
                'body' => ':( We couldn\'t find that page. It was probably my fault (unless you just made up a URL or something) '
            ],[
                'title' => 'Dangit!',
                'body' => 'Christopher Columbus didn\'t need directions, and neither did you!'
            ],[
                'title' => 'YOU BROKE EVERYTHING!',
                'body' => 'just messin with ya this page isn\'t real'
            ],[
                'title' => 'Psych!',
                'body' => 'This page doesn\'t exist'
            ],[
                'title' => 'Try typing better',
                'body' => 'Because what you\'re doing isn\'t working (I mean... 404 Page Not Found)'
            ],[
                'title' => 'Waaaait a minute...',
                'body' => 'This isn\'t where I left my <a href="/savings-checklist">savings checklist</a>'
            ],[
                'title' => 'That link is busted',
                'body' => 'Try clicking literally anything other than that'
            ],[
                'title' => 'Page missing',
                'body' => 'Looks like you\'ll be paying the published rate'
            ],[
                'title' => 'Page Missing',
                'body' => 'Call your brother-in-law... he\'s good with computers, right?'
            ],[
                'title' => 'OMG I Literally Can\'t Even',
                'body' => 'Find the page you were looking for'
            ]
        ];
        $k = array_rand($messages);
        return $messages[$k];
    }
}