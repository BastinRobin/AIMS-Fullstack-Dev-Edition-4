<?php

	class DB {

		private $host = "localhost";
		private $username = 'root';
		private $password = 'root';
		private $database = "aims_bootcamp";

		function __construct() {
		$mysqli = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		} 


		function insert($arr) {
			
		}


	}



	$conn = new DB;
	$conn->insert(['name' => 'Bastin Robin', 'job' => 'Engineer', 'location' => 'Bangalore']);



	insert into users (username, password) values ('bastin', 'engineer', 'bangalore');





?>