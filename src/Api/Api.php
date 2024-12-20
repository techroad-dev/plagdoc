<?php

declare(strict_types=1);
namespace plagdocs\Api;

use Illuminate\Support\Arr;
use \Exception;
use \Session;

class Api {

    public function __construct($data) {

        $this->default_url = $data->params['default_url'];
        $this->header = null;
        
        $this->authentication_api($data->params);
    }

    public function request(string $uri, array $data = [], $method = 'GET') {

        if(isset($_SESSION['auth_data']) && isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 1800)) {
            session_unset();     // unset $_SESSION variable for the run-time 
            session_destroy();   // destroy session data in storage
        }
        
        $response = $this->send_curl_request($uri, $method, $data);
        $data = json_encode(json_decode($response, true), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        return $data;

    }

    function send_curl_request($parameter, $method, $data=null) {
        $queryString = http_build_query($data);
        $token = isset($_SESSION['auth_data']) ? $_SESSION['auth_data'] : null;
        try {
            $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => $this->default_url.$parameter.'?'.$queryString,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => $method,
                    CURLOPT_HTTPHEADER => [
                        'Authorization: Bearer ' . $token, // Set Bearer token in header
                    ],
                    CURLOPT_POSTFIELDS => $queryString,
                ));
            $response = curl_exec($curl);
            curl_close($curl);
            return $response;
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    function authentication_api($data) {
        if(!isset($_SESSION['auth_data'])) {
            $response = $this->request('/auth/api', $data, 'POST');
            $response = json_decode($response);
            if(isset($response) && isset($response->access_token)) {
                $_SESSION['last_activity'] = time();
                $_SESSION['auth_data'] = $response->access_token;  
            }
            return json_encode($response);
        } else {
            return "User is authenticated in the session.";
        }
    }

 
}

?>
