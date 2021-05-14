<?php  

include "db_conn.php";

$sql = "SELECT * FROM menu ORDER BY id DESC";
$result = mysqli_query($dbconnect, $sql);