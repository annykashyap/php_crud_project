
<?php
$stu_id=$_POST['sid'];
$value1=$_POST['sname'];
$value2=$_POST['saddress'];
$value3=$_POST['sclass'];
$value4=$_POST['sphone'];
$conn=mysqli_connect("localhost","root","","cruda") or die("connection failed");
$sql="update student set sname='{$value1}' , saddress='{$value2}',
sclass='{$value3}', sphone='{$value4}' where sid={$stu_id}";
$result=mysqli_query($conn,$sql) or die("query unsucessful");
header("location: http://localhost/crud/index.php");
mysqli_close($conn);




?>
