<?php
session_start();

$con = mysqli_connect('localhost','root','','ntc_mgmnt');
if($con){
	//echo "conenction successful";
}else{
	echo "no connection";
}


if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  admin where admin='$username' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['user'] = $username;
			header('location:view_notice.php');
		}else{
			echo "login failed";
			header('location:login.php');
		}

}


?>