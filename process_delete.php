<?php
session_start();

//load database 
require("dbconfig.php");

//get if from url

$id = $_GET['id'];


$sql = "DELETE FROM students WHERE ID='$id'";

//echo $sql;
$resultset = mysqli_query($conxn,$sql) or die(mysqli_error($conxn));

$affRows = mysqli_affected_rows($conxn);
if($affRows>0){
    header("location: viewstudentinfo.php?s=Student Info Deleted Successfuly");
}else{
    header("location: viewstudentinfo.php?e=Student Info Cannt Deleted Successfuly");
}

mysqli_close($conxn);
?>
