<?php

namespace Whmcs\HttpClient;

use Whmcs\Authentication\Authentication;

class Curl {

    public static function doRequest(Authentication $authentication, $action, $post) {
        $whmcsUrl = $authentication->getUrl();

        // Admin username and password
        $username = $authentication->getUsername();
        $password = $authentication->getPassword();

        // Set post values
        $fields = array(
            'username' => $username,
            'password' => md5($password),
            'action' => $action,
            'responsetype' => 'json',
        );

        $postfields = array_merge($fields, $post);

        // Call the API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $whmcsUrl . 'includes/api.php');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));
        $response = curl_exec($ch);
        if (curl_error($ch)) {
            die('Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch));
        }
        $error = curl_error($ch);
        curl_close($ch);

        print_r($error);

        // Attempt to decode response as json
        return json_decode($response, true);
    }

}
