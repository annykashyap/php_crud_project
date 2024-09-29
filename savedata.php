<?php
$value1=$_POST['sname'];
$value2=$_POST['saddress'];
$value3=$_POST['class'];
$value4=$_POST['sphone'];
$conn=mysqli_connect("localhost","root","","cruda") or die("connection failed");
$sql="INSERT INTO student (sname,saddress,sclass,sphone) VALUES('{$value1}','{$value2}','{$value3}','{$value4}')";
$result=mysqli_query($conn,$sql) or die("query unsucessful");
header("location: http://localhost/crud/index.php");
mysqli_close($conn);
?>
 