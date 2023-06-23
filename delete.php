<?php
include "db.php";
$id = (int)$_GET['id'];
$sql ="delete from tasks where id='$id'";
$result=mysqli_query($con,$sql);
if($result){
	header('location:index.php');
	
}
?>