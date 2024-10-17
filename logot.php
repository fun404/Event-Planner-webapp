<?php
session_start();
if(!isset($_SESSION['all'][0])){
header('location:logint.php');
}else if($_GET['uid']){
header('location:logint.php');	
}else{
	header('location:logint.php');
}
session_destroy();
?>