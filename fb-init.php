<?php
session_start();

require './vendor/autoload.php';

$fb = new Facebook\Facebook ([
    'app_id' => '550531202149003',
    'app_secret' => '6739ce887be2dc52f55aa12ddcf6bc47',
    'default_graph_version' => 'v2.7',
]);

$helper = $fb -> getRedirectLoginHelper();
$login_url = $helper -> getLoginUrl("http://localhost/PhysBrains/login.php");

try {
   $accessToken = $helper -> getAccessToken();
   if(isset($accessToken)) {
       $_SESSION['access_token'] = (string)$accessToken;

       header("Location: index.php");
   }
} catch (Exception $exc) {
    echo $exc -> getTraceAsString();
}

/*
if(isset($_SESSION['access_token'])) {

    try {
        $fb -> setDefaultAccessToken($_SESSION['access_token']);
        $res = $fb -> get('/me?locale=en_US&fields=name,email');
        $user = $res -> getGraphUser();
        $username = $user -> getField('name');
        echo $username;

    } catch (Exception $exc) {
        echo $exc -> getTraceAsString();
    }
}
*/
?>