<?php
	

	$first_name = "bastin";
	$last_name = "robins";


	function get_full_name($a, $b) {

		// get the first and last name
	
		// concatenate the first and lastname
		$name = $a.' '.$b;

		// pass the value into strtoupper()
		$result = strtoupper($name);

		// return the result
	    return $result;
	}

	// Call the function
	$temp = get_full_name($first_name, $last_name);
	echo $temp;










?>