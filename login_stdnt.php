<?php
session_start();

$con = mysqli_connect('localhost','root','','ntc_mgmnt' );
if($con){
	// echo "conenction successful";
}else{
	echo "no connection";
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="buttons.css">
 <?php include 'links_stdnt.php'; ?>
 <?php include 'footer.html'; ?>
</head>
<body>
	<br><br><br><br>

	<center><h2>Login</h2></center><br>
		<table align="center" cellspacing="20" style="background-color: #0000009e;">
			<form action="links_stdnt.php" method="POST">
				<tr>
					<td><label >Roll no.</label></td>
					<td><input type="text" name="user"></td>
				</tr>		
				<tr>		
					<td><label >Password</label></td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>		
						<td colspan="2" align="center"> <input id="buttons" type="submit" value="Login" name="submit"></td>
				</tr>		
				</form>
		</table>	
</body>
</html>

