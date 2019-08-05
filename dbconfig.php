<?php
define('host','localhost');
define('user','root');
define('password','');
define('DB','project1');
$conxn=mysqli_connect(host,user,password,DB)or die(mysqli_error($conxn));
?>