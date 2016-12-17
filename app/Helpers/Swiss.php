<?php

namespace App\Helpers;

use Request;

class Swiss {

    public static function hashHubspotUTK(){
        // custom unique id for users - used in demo audit storage path naming
        return md5(\Cookie::get('hubspotutk').' poop');
    }

    public static function toMoney($number)
    {
        if($number > 0)
        {
            return '$'.number_format($number,2);
        } elseif( $number < 0)
        {
            return '-$'.number_format(str_replace('-', '', $number),2);
        } else
        {
            return '$0';
        }
    }

    public static function moreOrLess($first, $second)
    {
        if($first > $second)
        {
            return 'more';
        } elseif($second > $first)
        {
            return 'less';
        } else
        {
            return '';
        }
    }

    public static function toPercentage($number1, $number2, $decimals = 2)
    {
        if($number1 < $number2)
        {
            $number = 1-($number1/$number2);
        } elseif($number2 < $number1)
        {
            $number = 1-($number2/$number1);
        } else
        {
            $number = 0;
        }
        return $number == 0 ? '0%' : number_format($number * 100,$decimals) . '%';
    }

    public static function toReversePercentage($number1, $number2, $decimals = 2)
    {
        return number_format(100-(min([$number1, $number2])/max([$number1,$number2])*100), $decimals).'%';
    }

    public static function formatPercent($text)
    {
        return $text != '' ? intval($text) . '%' : '';
    }

    public static function isMore($first, $second)
    {
        return $first > $second;
    }

    public static function isNegative($number)
    {
        return substr($number,0,1) == '-';
    }

    public static function titleFromPath($wholePath = false)
    {
//        $title = $wholePath ? Str::title(str_replace(['-', '/'],[' ', ' - '],Request::path())) : Str::title(str_replace('-',' ',last(explode('/',Request::path()))));
        $title = $wholePath ? str_replace(['-', '/'],[' ', ' - '], \Request::path()) : str_replace('-',' ',last(explode('/',Request::path())));

        return 'Lojistic - '. $title;
    }

    public static function getCurrentSlug($lastPart = true)
    {
        return $lastPart ? last(explode('/',Request::path())) : Request::path();
    }

    public static function camelToSlug($camel)
    {
        preg_match_all('/[A-Z][^A-Z]*/',$camel,$words);
        $parts = $words[0];
        array_unshift($parts,substr($camel,0,strcspn($camel, 'ABCDEFGHJIJKLMNOPQRSTUVWXYZ')));
        $count = count($parts);
        $slug = '';
        for($i = 1; $i <= $count; $i++)
        {
            $slug .= strtolower($i == $count ? $parts[$i-1] : $parts[$i-1] . '-');
        }
        return $slug;
    }


}