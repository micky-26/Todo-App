<!DOCTYPE html>
<?php
include "db.php";



$sql ="select * from tasks";


$result=mysqli_query($con,$sql);

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
<center><h1>ToDo List</h1></center>
	
	<div class="row" style="margin-top:70px;">
	
	
	
	<div class="col-md-10 col-md-offset-1">
	<table class="table">
	<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">add task</button>
	<button type="button" class="btn btn-default pull-right " onclick="print()" >print</button>
	<hr><br>
	
	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task</h4>
      </div>
      <div class="modal-body">
	  
       <form method="post" action="add.php">
	   <div class="form-group">
	   <label>Task Name</label>
	   <input type="text" required name="task" class="form-control">
	   </div>
	   <input type="submit" name="send" value="Add Task" class="btn btn-success">
	   </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Task</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
	
	<?php while($row = mysqli_fetch_array($result)){
	?>
	
      <th><?php echo $row['id']?></th>
      <td class="col-md-10"><?php echo $row['name']?></td>
	  
	  <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">
	  Edit</a></td>
	  <td><a href="delete.php?id=<?php echo $row['id'];?>"  class="btn btn-danger">
	  Delete</a></td>
     
    </tr>
	<?php }?>
    
  </tbody>
</table>
	</div>
	</div>
</div>
</body>
</html>