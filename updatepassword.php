<!DOCTYPE html>
<html>
<head>
	<title>Update Password</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="buttons.css">
</head>
<body>
	<?php include 'navadm.php'; ?><br><br><br>
    <center>
        <center style="font-size: 25px;color:#ffb100;word-spacing: 5px;">Change Password</center><br>
    <form action="updatepassword.php" method="POST" >
        <table align="center" cellspacing="5" cellpadding="10">
            <tr>
                <td><label>Current Password&nbsp:&nbsp</label></td>
                <td><input type="password" name="currpwd"></td>
            </tr>
            <tr>
                <td><label>New Password&nbsp:&nbsp</label></td>
                <td><input type="password" name="newpwd"></td>
            </tr>
            <tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="cfmpwd"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input id="buttons" type="submit" name="submit" value="Change"></td>
            </tr>
        </table>
    </form>
    </center>

</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$con=mysqli_connect('localhost','root','','ntc_mgmnt');
	if (!$con) {
	   die("Connection failed");
	}
else{
	$currentpass = $_POST['currpwd'];
        $newpass = $_POST['newpwd'];
        $cnfrmpass = $_POST['cfmpwd'];
        $sql = "SELECT password FROM admin ";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        $oldpass = $row["password"];
        if($currentpass != $oldpass ){
            echo '<script> alert("current password wrong");</script>';
        }
        else if($newpass != $cnfrmpass){
            echo '<script> alert("pasword not matched");</script>';
        }
        else{
            $sql ="UPDATE `admin` SET `password`='$newpass' WHERE admin='admin'";
            $res = mysqli_query($con,$sql);
            if($res)
            echo '<script> alert("password changed sucessfully!!");</script>';
            else
            echo '<script> alert("opss!!");</script>';
        
}}}
?>