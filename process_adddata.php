<?php
//load database
require('dbconfig.php');
//load the form values
$studentname=$_POST['Sname'];
$address=$_POST['Address'];
$phonenumber=$_POST['Phone'];
$sex=$_POST['Sex'];

//preparing sql statement to insert
$sql="INSERT INTO students(ID,Sname,Address,Phone,Sex)values('$id','$studentname','$address','$phonenumber','$sex')";

//execute it on the server
$resultset=mysqli_query($conxn,$sql)or die(mysqli_error($conxn));
$affRows=mysqli_affected_rows($conxn);
if($affRows>0)
{
	header("location: viewstudentinfo.php?s=Record Added Successfully");
}
else
{
	header("location: studentform.php?e=Record didn't Added");
}
mysqli_close($conxn);
?>