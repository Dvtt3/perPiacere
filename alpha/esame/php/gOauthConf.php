<?php
//require_once("vendor/autoload.php");

$clientID = "1056870111114-6326c1iijmjgm1md7jtifg4mtrquunlc.apps.googleusercontent.com";
$clientSecret = "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";
$redirectUrl = "http://localhost/esame/login.php";

//--------------------------client request---------------------------

$client = new Google_Client();

$client->setClientId($clientID);

$client->setClientSecret($clientSecret);

$client->setRedirectUri($redirectUrl);

$client->addScope("email");

$client->addScope("profile");

session_start();

?>