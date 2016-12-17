<?php

namespace App\Helpers;
use LaravelBook\Ardent\Ardent;

class Portal extends Ardent {

        protected $table = 'rates';
        protected $primaryKey = 'rate_id';
        public $timestamps = false;
        private $url = 'http://www.sourcelogin.com/portal-api/';
    
	public function getLaunchpadLogin($username, $password){
            
            $userLogin = $this->get('check-credentials.php', array(
                'username' => $username,
                'password' => $password
                )
            );
            return $userLogin;
        }
        
        private function get($script, $varsArray){
            $varsArray['user_id'] = $_SERVER['REMOTE_ADDR'];
            // Get cURL resource
            $curl = curl_init();
            // Set some options - we are passing in a useragent too here
            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $this->url . $script . '?' .  implode("&", $varsArray),
                CURLOPT_USERAGENT => 'Lojistic',
//                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => $varsArray
            ));
            // Send the request & save response to $resp
            $resp = curl_exec($curl);
            // Close request to clear up some resources
            curl_close($curl);
            return $resp;
        }
        private function getJSON($script, $varsArray){
            $result = $this->get($script, $varsArray);
            return json_decode($result);
        }
}
