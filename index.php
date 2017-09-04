<html>

<script src = "javascriptfunctions.js"></script>

<?php
	include("connection.php");
	
	//Connect To Database
	$conn = connectdatabase();
	
?>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>TODO Application</title>
</head>

<body>
<div class="content">
	<h1><center>TODO Application</center></h1>
	<h4><center>By Thanjila Uddin</center></h4>
	
<div class="container">
This application allows you to add, delete, or view tasks.</br></br>

<div class="row">
<div class="col-lg-6">
			<div class="panel panel-info" style="margin-top:30px">
<div class="panel-heading"><strong><font size="5">Add</font></strong></div>
<div class="panel-body">
Enter the task you'd like to include in your to-do list. Enter the level of priority as well to organize the tasks. Level of priorites are <strong>1 = highest</strong> and <strong>3 = lowest.</strong><br><br>
	
	<form action="add.php" method="post">
            Task: <input type="text" name="addTask">  
			Priority: <input type="number" name="addPriority" min="1" max="3">
            <br><br>
            <input type="submit" value="Add">
        </form>
<br><br>
</div>
			</div>
		</div>
		
			
<div class="col-lg-6">
			<div class="panel panel-info" style="margin-top:30px">
<div class="panel-heading"><strong><font size="5">Delete</font></strong></div>
<div class="panel-body">
Finished with a task? In order to cross it off the list, enter the name of the task here.<br><br>
	<form action="delete.php" method="post">
            Task: <input type="text" name="deleteTask"> 
            <br><br>
            <input type="submit" value="Delete">
        </form>
<br><br>
</div>
			</div>
		</div>
		</div>
	
	
<div class="row">
<div class="col-lg-6">
<div class="panel panel-info">	
<div class="panel-heading"><strong><font size="5">View</font></strong></div>
<div class="panel-body">
Check what else needs to be done. <br><br>
<form action = "view.php" method="post" target = "_blank">
		<button type = "submit">View</button>
		
	</form>
</div>
</div>
</div>
</div>
</html>