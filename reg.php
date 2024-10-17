<?php
include "db/config.php";
$nm = $_GET['uname'];
$em = $_GET['emailid'];
$mob = $_GET['phone'];
$dt = $_GET['dob'];
$gen = $_GET['gender'];
$countr = $_GET['contry'];
$pas = $_GET['pass'];
$enc = base64_encode($pas);
$query = "insert into userinfo values('','$nm','$em','$mob','$dt','$gen','$countr','$enc','','','','','','','1',NOW())";
$insert = mysqli_query($con,$query);

?>