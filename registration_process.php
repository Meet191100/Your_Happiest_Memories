<?php

session_start();

$con = mysqli_connect('localhost' , 'root');

if($con){
	
}else{
	echo "no connection";
}

mysqli_select_db($con,'login1');

$username = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signin where username = '$username' ";

$result =  mysqli_query($con ,$q);

$num = mysqli_num_rows($result);

if($num == 1){
	$msg='username is already available!!!';
	header('location:registration.php?msg='.$msg);
}else{

	$qy = "insert into signin(username ,password) values('$username' , '$pass') ";
	mysqli_query($con,$qy);
	$msg='You have registered successfully.';
	header('location:login.php?msg='.$msg);
}


?>