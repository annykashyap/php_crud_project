<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
	<?php
	$conn=mysqli_connect("localhost","root","","cruda") or die("connection failed");
	$sql="select*from student join studentclass 
	where student.sclass=studentclass.cid";
	$result=mysqli_query($conn,$sql) or die("query unsuccessful");
	if (mysqli_num_rows($result)>0)
	{
	
	
	
	
	
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
		<?php
		while ($row=mysqli_fetch_assoc($result))
		{
		?>
            
            <tr>
                <td><?php echo $row['sid'] ?>
                </td>
                <td><?php echo $row['sname'] ?>
				</td>
                <td><?php echo $row['saddress'] ?>
				</td>
                <td><?php echo $row['cname'] ?>
				</td>
                <td><?php echo $row['sphone'] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']; ?>'>edit</a>
					<a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>delete</a>
                </td>
            </tr>
			 <?php 
		} ?>
        
            

            

        </tbody>
    </table>
	<?php
	}
	
	?>

</div>
</div>
</body>
</html>
