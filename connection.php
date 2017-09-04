<?php
function connectDatabase(){
	//Connect To Database
	
	$servername="localhost";
	$username = "root";
	$password = ""; //default password
	$dbname="todo_app";
	$usertable="viewtask";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	return $conn;
}
	
	