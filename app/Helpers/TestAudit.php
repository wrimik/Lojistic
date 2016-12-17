<?php
namespace App\Helpers;
/**
 *  Communicate with audit system (intelliship) to audit client bills
 *
 */

class TestAudit  {
    public $id;
    public $dbc;
    private $guz; // GuzzleHttp object
    public $baseUrl = ' http://testaudit.lojistic.com';
    public $uploadUrl = 'finalupload.cgi';
    public $curl = ''; //curl handler - depreciated
    public $numRows = 0; // Number of rows in file

    function __construct()
    {
        $this->guz = new GuzzleHttp\Client(['base_url' => $this->baseUrl]);
    }

    /**
    *
    * @return Response
    */
    function auditUploadFile(){
        $result  = $this->sendFileToIntelliship();
        $headers = $this->formatCurlHeaders($result);
        $uriVars = $this->formatUriVars($headers['Location']);

        if($uriVars['filetype'] == 'FedEx'){
            return $this->createFedExResult($uriVars);//returns result of audit
        }else{
            echo $this->createUPSResult($uriVars);// takes longer, returns list of urls and vars for front-end to try fetching with ajax
        }

        curl_close($this->curl);
    }

    /**
     * Helper function courtesy of
     * https://github.com/guzzle/guzzle/blob/3a0787217e6c0246b457e637ddd33332efea1d2a/src/Guzzle/Http/Message/PostFile.php#L90
     * @return string
     */

    function sendFileToIntelliship() {
        dd($_FILES);
        $invoice = Input::file('invoice-csv');
        $this->numRows = count(file($invoice, FILE_SKIP_EMPTY_LINES));
        // You can send requests that use a POST body containing fields & files.
        $result = $this->guz->post('/post', [
            'body' => [ 'file_name' => $invoice ]
        ]);
         return $result;
    }





    function refreshCurl(){
        $this->curl = curl_init();
    }

    /**
     * @param $uriVars
     * @return mixed|string|void
     */
    function createFedExResult($uriVars){
        $vars1 = array(
            'audit' => 'auditid'
        );
        $vars2 = array(
            'filetype' => $uriVars['filetype'],
            'neverid'  => $uriVars['neverid']
        );
        $vars3 = array(
            'filetype' => $uriVars['filetype'],
            'lateid'   => $uriVars['lateid']
        );
        $json = array(
            'carrier' => 'FedEx',
            'numrows'    => $this->numRows,
            'urivars' => $uriVars,
            'audit'   => $this->createResultURL($vars1),
            'mns'     => $this->createResultURL($vars2),
            'late'    => $this->createResultURL($vars3)
        );
        return json_encode($json);
    }

    /**
     * @param $uriVars
     * @return mixed|string|void
     */
    function createUPSResult($uriVars){
        $vars1 = array(
            'audit' => 'auditid'
        );
        $vars2 = array(
            'filetype' => $uriVars['filetype'],
            'upssatid' => $uriVars['ups_satid']
        );
        $json = array(
            'carrier' => 'UPS',
            'numrows'    => $this->numRows,
            'urivars' => $uriVars,
            'a'       => $vars1,
            'b'       => $vars2
        );
//        $json[] = json_decode($this->postUrl($this->baseUrl.'dbretrieve.cgi', $vars1));
//        $json[] = json_decode($this->postUrl($this->baseUrl.'dbretrieve.cgi', $vars2));
        return json_encode($json);
    }
    /**
     * @param $vars
     * @return array|mixed
     */
    function createResultURL($vars){
        return json_decode($this->postUrl($this->baseUrl.'dbretrieve.cgi', $vars));
    }

    /**
     * @param $uri
     * @return array
     */
    function formatUriVars($uri){
        $parts = explode('?', $uri);
        $vars  = $parts[1];
        $vars  = explode('&', $vars);
        $array = array();
        foreach($vars as $var){
            $var = explode('=', $var);
            $array[$var[0]] = $var[1];
        }
        return $array;
    }

//    function sendFile() {
//// Helper function courtesy of https://github.com/guzzle/guzzle/blob/3a0787217e6c0246b457e637ddd33332efea1d2a/src/Guzzle/Http/Message/PostFile.php#L90
//        $filename = $_FILES['file']['tmp_name'];
//        $fp = file($filename, FILE_SKIP_EMPTY_LINES);
//        $this->numRows = count($fp);
//        unset($fp);// clear from memory
//
//        $cfile = $this->formatFileForCurl($filename, 'text/csv', time().'.csv');
////NOTE: The top level key in the array is important, as some apis will insist that it is 'file'.
//        $data = array('fileinput' => $cfile);
//
//        $options = array(CURLOPT_URL => $this->baseUrl.$this->uploadUrl,
//            CURLOPT_RETURNTRANSFER => true,
//            CURLINFO_HEADER_OUT => true, //Request header
//            CURLOPT_HEADER => true, //Return header
//            CURLOPT_SSL_VERIFYPEER => true, //Don't veryify server certificate
//            CURLOPT_POST => true,
//            CURLOPT_POSTFIELDS => $data
//        );
//
//        curl_setopt_array($this->curl, $options);
//        $result = curl_exec($this->curl);
//        $header_info = curl_getinfo($this->curl, CURLINFO_HEADER_OUT);
//        $header_size = curl_getinfo($this->curl, CURLINFO_HEADER_SIZE);
//
//        return $result;
//    }


    function formatCurlHeaders($headers){
        $array = array();
        $headers = explode("\n", $headers);
        foreach($headers as $row){
            $r = explode(': ', $row);
            $array[$r[0]] = $r[1];
        }
        return $array;
    }




    function postUrl($url, $vars){
        $this->refreshCurl();
        // set url
        $options = array(CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLINFO_HEADER_OUT => true, //Request header
            CURLOPT_HEADER => true, //Return header
            CURLOPT_SSL_VERIFYPEER => true, //Don't veryify server certificate
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $vars
        );
        curl_setopt_array($this->curl, $options);
        $result = curl_exec($this->curl);
        $header_info = curl_getinfo($this->curl, CURLINFO_HEADER_OUT);
        $header_size = curl_getinfo($this->curl, CURLINFO_HEADER_SIZE);
        $result = substr($result, $header_size, strlen($result)-$header_size);
        // $output contains the output string
        return $result;
    }





//    function sendFile() {   PRE GUZZLE
//// Helper function courtesy of https://github.com/guzzle/guzzle/blob/3a0787217e6c0246b457e637ddd33332efea1d2a/src/Guzzle/Http/Message/PostFile.php#L90
//        $filename = $_FILES['file']['tmp_name'];
//        $fp = file($filename, FILE_SKIP_EMPTY_LINES);
//        $this->numRows = count($fp);
//        unset($fp);// clear from memory
//
//        $cfile = $this->formatFileForCurl($filename, 'text/csv', time().'.csv');
////NOTE: The top level key in the array is important, as some apis will insist that it is 'file'.
//        $data = array('fileinput' => $cfile);
//
//        $options = array(CURLOPT_URL => $this->baseUrl.$this->uploadUrl,
//            CURLOPT_RETURNTRANSFER => true,
//            CURLINFO_HEADER_OUT => true, //Request header
//            CURLOPT_HEADER => true, //Return header
//            CURLOPT_SSL_VERIFYPEER => true, //Don't veryify server certificate
//            CURLOPT_POST => true,
//            CURLOPT_POSTFIELDS => $data
//        );
//
//        curl_setopt_array($this->curl, $options);
//        $result = curl_exec($this->curl);
//        $header_info = curl_getinfo($this->curl, CURLINFO_HEADER_OUT);
//        $header_size = curl_getinfo($this->curl, CURLINFO_HEADER_SIZE);
//
//        return $result;
//    }

//    /**
//     * @param $filename
//     * @param $contentType
//     * @param $postname
//     * @return CURLFile|string
//     */
//    function formatFileForCurl($filename, $contentType, $postname) {
//        // See: https://wiki.php.net/rfc/curl-file-upload
//        if (function_exists('curl_file_create')) {
//            return curl_file_create($filename, $contentType, $postname);
//        }
//        // Use the old style if using an older version of PHP
//        $value = "@$filename;filename=" . $postname;
//        if ($contentType) {
//            $value .= ';type=' . $contentType;
//        }
//        return $value;
//    }
}