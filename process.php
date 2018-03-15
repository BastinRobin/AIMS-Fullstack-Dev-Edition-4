<?php

	

	$message = $_POST['todo'];

	define('HOST', 'localhost');
	define('DB', 'bootcamp');
	define('USER', 'root');
	define('PASSWORD', 'root');


	// First connect to the database
	$conn = mysqli_connect(HOST, USER, PASSWORD, DB); 
	
	// Insert operation
	if (isset($_POST['todo'])) {
		mysqli_query($conn, "INSERT INTO `todo` (`id`, `body`, `is_deleted`) VALUES (NULL, '.$message.', '0')");
		
		header('Location:todo.php');
	}





?>