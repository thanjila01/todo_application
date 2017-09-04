<?php
	include("connection.php");
	
	//Connect To Database
	$conn = connectDatabase();
	
	$Task = $_POST['addTask'];
	$Priority = $_POST['addPriority'];
	
	$sql = "INSERT INTO viewtask (Task, Priority) VALUES ('$Task','$Priority');";
	$result = mysqli_query($conn,$sql) or die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $sql");
		
	/*if(!mysqli_query($conn,$sql))
	{
		echo 'Data not inserted';
	} else {
		echo 'Data inserted';
}	*/

	if(!$result)
	{
		die("Error, data not inserted: " . mysqli_error($conn) . "<hr>\nQuery: $sql");
	}
	else
	{
		echo 'Task is added to the list successfully! Click on the link below to view the updated TODO list.';
		echo "<br>";
	}
	
	echo "<a href=" . "view.php" . " target=" . "_blank" . "><h2>Updated List</h2></a>";
	
	mysqli_close($conn);
    ?>