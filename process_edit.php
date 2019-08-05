<?php
session_start();
//load database
$id = $_GET['id'];

require('dbconfig.php');

//load the form valuee
$studentname=$_POST['Sname'];
$address=$_POST['Address'];
$phonenumber=$_POST['Phone'];
$sex=$_POST['Sex'];

$sql = "UPDATE students SET Sname = '$studentname', Address='$address',Phone='$phonenumber',Sex='$sex' WHERE ID='$id'";
$resultset = mysqli_query($conxn,$sql) or die(mysqli_error($conxn));
$affRows = mysqli_affected_rows($conxn);
if($affRows>0){
    header("location: viewstudentinfo.php?s=Record Updated Successfully");
}
else
{
	header("location: viewstudentinfo.php?e=Record couldnot be Updated");
}
mysqli_close($conxn);
?>

