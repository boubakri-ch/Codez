<?php  

$sname = "localhost";
$uname = "root";
$password = "rima";

$db_name = "cuisine";

$dbconnect  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$dbconnect) {
	echo "Connection failed!";
}

?>