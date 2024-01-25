<?php
include 'db.php';

$get_id=$_REQUEST['teacher_id'];

$fname= $_POST['fname'];
$mname= $_POST['mname'];
$lname= $_POST['lname'];
$address= $_POST['address'];
$email= $_POST['email'];

$sql = "UPDATE teacher SET fname ='$fname', mname ='$mname', lname ='$lname', 
address ='$address', email ='$email' WHERE teacher_id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='admin.php'</script>";


?>

