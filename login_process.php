
<?php


session_start();

$con = mysqli_connect('localhost' , 'root' );

if($con){
	//echo 'You have registered successfully.';
	
}else{
	echo "no connection";
}

mysqli_select_db($con,'login1');

$username = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signin where username = '$username' && password = '$pass' ";

$result =  mysqli_query($con ,$q);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['username'] = $username;
	

        //session()->flash('message', '<b>Nice!</b> You are now logged in');
        //session()->flash('type', 'success');

	    header('location:home.php');



}else{
   // echo "login failed";
	header('location:login.php?error=1');
}


?>