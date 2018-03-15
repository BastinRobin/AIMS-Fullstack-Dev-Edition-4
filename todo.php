<?php
	

	define('HOST', 'localhost');
	define('DB', 'bootcamp');
	define('USER', 'root');
	define('PASSWORD', 'root');

	$conn = mysqli_connect(HOST, USER, PASSWORD, DB); 
	$todos = mysqli_query($conn, "SELECT * FROM todo;");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Todo Application</title>
</head>
<body>

<style type="text/css">
	.green {
		background: red;
	    padding: 2px;
	    border-radius: 5px;
	    color: #fff;
	}
</style>

<form method="POST" action="process.php">
	<input type="text" name="todo">
	<button type="submit">Add</button>
</form>
<ul>
	<?php while($todo = mysqli_fetch_array($todos)) { ?>
	<li><?php echo $todo['body'] ?><button class="green">x</button></li>
	<?php } ?>
</ul>

</body>
</html>

