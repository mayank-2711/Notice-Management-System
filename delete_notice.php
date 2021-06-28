<!DOCTYPE html>
<html>
<head>
	<title>Delete Notice</title>
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="buttons.css">
</head>
<body>
	<?php include 'navadm.php'; ?><br><br><br>
	<form action="delete_notice.php" method="POST">
		<table align="center">
			<tr>
				<td>Enter notice ID&nbsp:&nbsp</td>
				<td><input type="text" name="del_ntc"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" id="buttons" name="submit" value="Delete"></td>
			</tr>
		</table>
	</form>
	<?php
	if (isset($_POST['submit'])){
			$con=mysqli_connect('localhost','root','','ntc_mgmnt');
			if (!$con) {
	   			die("Connection failed");
			}
			else{
				$d=$_POST['del_ntc'];
				$sql2="DELETE FROM notices WHERE id='$d'";
				$chk = mysqli_query($con , $sql2);
			if($chk)
				echo "<script>alert('Notice has been deleted successfully')</script>";
			else
				echo "<script>alert('INSERTION FAILED')</script>";
	}}

	?>

</body>
</html>