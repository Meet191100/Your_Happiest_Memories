<?php

//session_start();

//session_destroy();

//header('location:login.php');





	require_once "config.php";
	unset($_SESSION['access_token']);
	$gClient->revokeToken();
	session_destroy();
	header('Location: login.php');
	exit();
?>