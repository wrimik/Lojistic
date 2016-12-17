<?php
namespace App\Helpers;

/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 8/27/15
 * Time: 10:58 AM
 */
class UPSUser
{
    public static function validate($username, $password)
    {
        $result = CurlHelper::getJson($_ENV['AUDIT_API_URL'] . 'ups/check-credentials?u=' . $username.'&p='.$password);
        return $result;
    }
}