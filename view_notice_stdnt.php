<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php include 'navstdnt.php'; ?>

    <?php
$con=mysqli_connect('localhost','root','','ntc_mgmnt');
    if (!$con) {
       die("Connection failed");
    }

    $sql = "SELECT * FROM notices WHERE stdnt='Y' ORDER BY id"; 
$result = $con->query($sql); 
$con->close();  
?><br><br>
<table align="center" border="5px" style="color: #ffb100;border-color: #6f3d09;font-size: 18px;text-align: center;background-color: #0000009e;">
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Time</th>
        <th>Notice</th>
        
    </tr>
    <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['id'];?></td> 
                <td><?php echo $rows['date1'];?></td> 
                <td><?php echo $rows['time1'];?></td> 
                <td style="word-wrap: break-word;"><?php echo $rows['notice'];?></td> 
               
            </tr> 
            <?php 
                } 
             ?> 
</table>

</body>
</html>