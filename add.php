<?php
include "db.php";

if(isset($_POST['send'])){


$name =htmlspecialchars($_POST['task']);

$sql ="insert into tasks (name) values ('$name')";

$result=mysqli_query($con,$sql);
if($result)
{
	header('location:index.php');
}
}



?>