
<?php
	session_start();
	require_once "vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("1066484171605-d6qktlvbsp9o6qbshl16b8360kojt5b4.apps.googleusercontent.com");
	$gClient->setClientSecret("M0zPM7nB5vfVpixhn_mSK3if");
	$gClient->setApplicationName("memory web");
	$gClient->setRedirectUri("http://localhost/login/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
