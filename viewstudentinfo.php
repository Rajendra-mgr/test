<!DOCTYPE html>
<html>
<head>
	<title>example of displaying the records of students</title>
</head>
<body>
<B><U>Student Information Table</U></B>
<br>
<br>
<a href="studentform.php">Add Student Record</a>
<br>
<br>



	<?php
     if(isset($_GET['s']))
     {
     	echo $_GET['s'];
     }
    if(isset($_GET['e']))
    {
    	echo $_GET['e'];
    }
	?>

<table border="1px">
	<tr>
	<td>ID</td>
	<td>Sname</td>
	<td>Address</td>
	<td>Phone</td>
	<td>Sex</td>
	<td>Control</td>
	</tr>
<?php
require_once('dbconfig.php');
$sql="select * from students";
$res=mysqli_query($conxn,$sql)or die(mysqli_error($conxn));
$numRows=mysqli_num_rows($res);
if($numRows>0)
{
	while($row=mysqli_fetch_assoc($res))
	{

?>

	<tr>
	<td><?php echo $row['ID'];?></td>
	<td><?php echo $row['Sname'];?></td>
	<td><?php echo $row['Address'];?></td>
	<td><?php echo $row['Phone'];?></td>
	<td><?php echo $row['Sex'];?></td>
	<td><a href="editstudent.php?id=<?php echo $row['ID'];?>"> <input type="button" name="edit" value="Edit" /></a>
	<a href="process_delete.php?id=<?php echo $row['ID'];?>"> <input type="button" name="delete" value="Delete"/> </a>
	</tr>
	<?php
		}
}
?>
</table>
</body>
</html>