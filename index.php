<?php



$one = array(
	'name' 	  => 'Bastin Robins',
	'job'  	  => 'Data Scientist',
	'company' => 'HashResearch Labs'
);


$two = array(
	'name' 	  => 'Sam harvey',
	'job'  	  => 'Mechanical Engineer',
	'company' => 'Robert Bosch'
);


$three = array(
	'name' 	  => 'James Doe',
	'job'  	  => 'Product Scientist',
	'company' => 'HashResearch Labs'
);


$four = array(
	'name' 	  => 'Ericsson',
	'job'  	  => 'Mechatronic Engineer',
	'company' => 'Bosch'
);


// Create an array of all users
$peoples = array(
	$one, $two, $three, $four	
);


echo json_encode($peoples);










?>