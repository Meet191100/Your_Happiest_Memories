
<?php
	session_start();
	require_once "vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("642879909427-q0rrm6sfmhdr5tb0juo4pmq1sm4ndq9m.apps.googleusercontent.com");
	$gClient->setClientSecret("ptBZNDlhxMtpiTYCJbIeMXK8");
	$gClient->setApplicationName("memory login");
	$gClient->setRedirectUri("http://localhost/login/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
