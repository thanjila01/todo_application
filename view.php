<?php
	include("connection.php");
	
	//Connect To Database
	$conn = connectDatabase();
	
	$result = mysqli_query($conn,"SELECT * FROM viewtask ORDER BY Priority ASC;");
	
	echo "<center><h1>To Do List</h1></center><br><br>";
	
	echo "<style>" . "table, th, td {" . "border: 1px solid black;" . "border-collapse: collapse;" . "th, td {" . 
		"padding: 15px;" . "}" . "</style>";
	echo "<table style=\"width:100%\"><tr><th>Task</th><th>Priority</th></tr>";
    while($row = mysqli_fetch_array($result))
      {
      echo "<tr><td>".$row['Task']."</td><td>".$row['Priority']."</td>"; 
	  echo "</tr>";
      }
echo "</table>";
    mysqli_close($conn);
    ?>