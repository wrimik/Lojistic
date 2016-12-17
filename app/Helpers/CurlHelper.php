<?php
namespace App\Helpers;
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 5/7/15
 * Time: 3:37 PM
 */
class CurlHelper
{
    /** sends a file and data to a location via post request
     * @param $url
     * @param $fileLocation
     * @param $fileName
     * @param $postData
     * @return array
     */
    public static function postFile($url, $fileLocation, $fileName, $postData)
    {
        $ch = curl_init();
        $cfile = CurlHelper::getCurlValue($fileLocation . $fileName, 'text/csv', time() . '.csv');
        $postData['fileinput'] = $cfile;
        $options = CurlHelper::options($url, $postData);
        curl_setopt_array($ch, $options);
        $result = CurlHelper::exec($ch);
        return $result;
    }

    /**
     * Executes the curl request, returns formatted response
     * @param $ch
     * @return array
     */
    public static function exec($ch)
    {
        $response = curl_exec($ch);
        return CurlHelper::formatResponse($ch, $response);
    }

    /**
     * turns curl response text into an array of headers and body text (sans headers)
     * @param $ch
     * @param $response
     * @return array
     */
    public static function formatResponse($ch, $response)
    {
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $raw_headers = substr($response, 0, $header_size);
        $body = substr($response, $header_size, strlen($response) - $header_size);
        $headers = CurlHelper::formatCurlHeaders($raw_headers);
        return array('headers' => $headers, 'body', $body);
    }

    /**
     * returns all required curl headers
     * @param $url
     * @param $postData
     * @return array
     */
    public static function options($url, $postData)
    {
        $opts = array(CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLINFO_HEADER_OUT => true, //Request header
            CURLOPT_HEADER => true, //Return header
            CURLOPT_SSL_VERIFYPEER => true, //Don't veryify server certificate
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
        );
        return $opts;
    }

    /**
     * converts a file name and content type into a curl attachment string
     * @param $filename
     * @param $contentType
     * @param $postname
     * @return CURLFile|string
     */
    public static function getCurlValue($filename, $contentType, $postname)
    {
        // See: https://wiki.php.net/rfc/curl-file-upload
        if (function_exists('curl_file_create')) {
            return curl_file_create($filename, $contentType, $postname);
        }
        // Use the old style if using an older version of PHP
        $value = "@$filename;filename=" . $postname;
        if ($contentType) {
            $value .= ';type=' . $contentType;
        }
        return $value;
    }

    /**takes a string of curl headers and returns array
     * @param $headers
     * @return array
     */
    public static function  formatCurlHeaders($headers)
    {
        $array = array();
        $headers = explode("\n", $headers);
        foreach ($headers as $row) {
            if (substr_count($row, ':') != 0) {
                $r = explode(': ', $row);
                $array[$r[0]] = $r[1];
            }
        }
        return $array;
    }

    public static function post($url, $vars)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($vars));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 300);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public static function getJson($url, $timeout = 60)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

}