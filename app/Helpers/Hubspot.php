<?php
namespace App\Helpers;
use Illuminate\Http\Request;
/*
*    Send valid leads to hubspot
*
*/


class Hubspot  {

    public $hs; //contains hubspot variables to be sent
    public $hubspotutk;
    public $url = 'https://forms.hubspot.com/uploads/form/v2/68908/';
    public $portalID = 68908;
    public $formID;
    public $defaultFormID = '719f157e-93c9-4b23-95a9-5d13d9ee23d7';
    public $thankYou;
    public $hpCheck;

    public function __construct($formID, $thankYou){
        $request = new Request();
        $this->setFormID($formID);
        $this->setThankYou($thankYou);

        $this->hubspotutk = \Cookie::get('hubspotutk');
        $this->ip_addr    = $_SERVER['REMOTE_ADDR'];
        $this->pageUrl    = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'N/A';
        $this->pageName   = $request->input('pagename'); //TODO: inject page title into hubspot forms

    }


    /**
        * Send a new hubspot form submission to hubspot
        *
        * @return Response
        */
    function send(){
        \App\Helpers\SlackBot::message($this->hsPostString());
        if($this->validate()){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->hsPostString());
            curl_setopt($ch, CURLOPT_URL, $this->url.$this->formID);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);  //Log the response from HubSpot as needed.
            curl_close($ch);
        }else{
            $result = false;
        }
        return $result;
    }

    /**
        * Creates post string out of assigned variables
        *
        * @return string
        */
    function hsPostString(){

        $postString = 'leadsource=Website&';

        $hs_context = array(
            'hutk'      => $this->hubspotutk,
            'ipAddress' => $this->ip_addr,
            'pageUrl'   => $this->pageUrl,
            'pageName'  => $this->pageName
        );
        $hs_context_json = json_encode($hs_context);

        foreach($this->hs as $key => $val){
            $postString .= '&' . $key . '=' . urlencode($val);
        }

        $postString.= "&hs_context=" . urlencode($hs_context_json);
        mail('mike@lojistic.com', 'post data', $postString);

        return $postString;
    }


    function setFormID($id){
        $id ? $this->formID = $id : $this->formID = $this->defaultFormID;
    }

    function setThankYou($id){
        $id ? $this->thankYou = $id : $this->formID = $this->defaultFormID;
    }

    function validate(){
        $valid = false;
        if(
            !$this->isUrl($this->hs['firstname'])  //first name isn't a url
            &&
            !$this->isUrl($this->hs['lastname'])  //last name isn't a url
            &&
            $this->hpCheck == '' //honeypot is left empty (spam trap)
            &&
            substr($this->hs['email'], -3) != '.ru' //no .ru email addresses
            &&
            $this->hs['phone'] != '123456' // super common with robots we are targeted by
            &&
            $this->hs['firstname'].$this->hs['lastname'].$this->hs['email'] != '' // not blank
            ){
            $valid = true;
        }
        return $valid;
    }

    private function isUrl($var){
        return filter_var($var, FILTER_VALIDATE_URL);
    }

}