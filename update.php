<!DOCTYPE html>
<?php
include "db.php";
$id= (int)$_GET['id'];
$sql = "select * from tasks where id='$id'";
$result=mysqli_query($con,$sql);

$row=mysqli_fetch_array($result);


if(isset($_POST['send'])){
	$task= htmlspecialchars($_POST['task']);
$sql2 = "update tasks set name='$task' where id='$id'";
$result=mysqli_query($con,$sql2);

header('location:index.php');
}
?>
<html>
<head>

<!--<script src="./jquery-1.2.6.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet">

<title>crud App</title>
</head>

<body>
<div class="container">
<center><h1>Update ToDo List</h1></center>
	
	<div class="row" style="margin-top:70px;">
	
	
	
	<div class="col-md-10 col-md-offset-1">
	<table class="table">
	
	<hr><br>
	
	

   
	  
       <form method="post" >
	   <div class="form-group">
	   <label>Task Name</label>
	   <input type="text" required name="task" value="<?php echo $row['name'];?>" class="form-control">
	   </div>
	   <input type="submit" name="send" value="Add Task" class="btn btn-success">&nbsp;
	   <a href="index.php" class="btn btn-warning">Back</a>
	   </form>
      
  
	</div>
	</div>
</div>
</body>
</html>