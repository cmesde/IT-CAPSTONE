<?php
require_once('db.php');

$get_id=$_GET['teachers_id'];

// sql to delete a record
$sql = "Delete from student where teachers_id = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:admin.php');
?>