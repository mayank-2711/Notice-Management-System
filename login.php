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
	 <?php include 'links.php'; ?>
	 <?php include 'footer.html'; ?>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="buttons.css">
	<script>
 	function loginForm(){
	var error_message = "";
if(document.getElementById("admin").value == ""){
 error_message = "Please provide Admin ID\n";
 alert(error_message);
 return false;
}
else if (document.getElementById("pass").value == "") {
	error_message = "Please provide Password\n";
   alert(error_message);
   return false;
}
else
return true;
}
 </script>

</head>
<body>
<br><br><br><br>
	<h2><center>Login</center></h2><br>
	
		<table align="center" cellspacing="20" style="background-color: #0000009e;">
			<form action="links.php" method="POST" onsubmit='return loginForm();'>
				<tr>
					<td><label for="admin">Admin ID</label></td>
					<td><input type="text" name="user" id="admin"></td>
				</tr>		
				<tr>		
					<td><label for="pass">Password</label></td>
					<td><input type="password" name="pass" id="pass"></td>
				</tr>
				<tr>		
						<td colspan="2" align="center"> <input id="buttons" type="submit" value="Login" name="submit"></td>
				</tr>		
				</form>
		</table>	
</body>
</html>
