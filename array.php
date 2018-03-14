<?php


	$people = array(

		[
			'fname' => 'Bastin',
			'lname' => 'Robins',
			'occupation' => 'Data Scientist',
			'skills' => [
				'computer' => [
					'hardware' => [
						'Windows',
						'Linux',
						'Mac'
					],
					'software' => [
						'Python' => [2.7, 3.5],
						'Perl',
						'php',
						'C',
						'C++'
					]
				]
			]

		],

		[
			'fname' => 'Sam',
			'lname' => 'Harvey',
			'occupation' => 'Product Scientist',
			'skills' => [
				'computer' => [
					'hardware' => [
						'Linux',
						'Mac'
					],
					'software' => [
						'Perl',
						'php',
						'C',
						'C++'
					]
				]
			]
		]



	);



	echo json_encode($people[0]['skills']['computer']['software']);


?>