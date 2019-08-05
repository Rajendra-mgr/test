<!DOCTYPE html>
<html>
<head>
	<title>Student Form </title>
</head>

<body>
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
<form method="POST" action="process_adddata.php">
<label>Student ID : </label>
<input type="Number" name="ID" required />
<br>
<label>Student Name : </label>
<input type="text" name="Sname" required/>
<br>
<label>Address : </label>
<input type="text" name="Address" required />
<br>
<label>Phone Number : </label>
<input type="number" name="Phone"required />
<br>
<label>Sex : </label>
<input type="radio" name="Sex" value="Male" required/>Male
&nbsp;
<input type="radio" name="Sex" value="Female" />Female 
<br>
<input type="submit" value="Send" />
&nbsp;
<a href="viewstudentinfo.php">
<input type="button" name="view" value="Display Info"/> 
</a>
</form>
</body>
</html>