<!DOCTYPE html>
<html>
<head>
	<title>Publish Notice</title>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="buttons.css">
</head>
<body><?php include 'navadm.php'; ?><br><br><br>
	<h2><center>Enter Data</center></h2><br>
	<form action="publish_page.php" method="POST">
		<table align="center" cellspacing="5" cellpadding="10">
			
			<tr>
				<td>Date</td>
				<td><input type="text" name="date" id="currDate">
					<script type="text/javascript">
						var today = new Date();
						var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  						document.getElementById("currDate").value = date;
					</script></td>
			</tr>
			<tr>
				<td>Time</td>
				<td><input type="text" name="time" id="currTime">
					<script type="text/javascript">
						var today = new Date();
						var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  						document.getElementById("currTime").value = time;
					</script></td>
			</tr>
			<tr>
				<td>Share with student</td>
				<td><input type="radio" name="student" value="Y">Yes<input type="radio" name="student" value="N">No</td>
			</tr>
			<tr>
				<td>Share with faculty</td>
				<td><input type="radio" name="faculty" value="Y">Yes<input type="radio" name="faculty" value="N">No</td>
			</tr>
			<tr>
				<td>Share with HOD</td>
				<td><input type="radio" name="hod" value="Y">Yes<input type="radio" name="hod" value="N">No</td>
			</tr>
			<tr>
				<td>Notice</td>
				<td><textarea name="notice" rows="5" cols="20"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input id="buttons" type="submit" name="submit" value="Publish"></td>
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
				$dt=$_POST['date'];
				$tm=$_POST['time'];
				$sws=$_POST['student'];
				$swf=$_POST['faculty'];
				$swh=$_POST['hod'];
				$notice=$_POST['notice'];
				$sql = "INSERT INTO notices (date1,time1,stdnt,fclty,hod,notice) VALUES('$dt','$tm','$sws','$swf','$swh','$notice')";
				$chk = mysqli_query($con , $sql);
		if($chk)
			echo "<script>alert('Notice has been posted successfully')</script>";
		else
			echo "<script>alert('INSERTION FAILED')</script>";
			}
		}
	?>
</body>
</html>