<?php



$target = array(
	array(
		array(
		[
			'entid' => "50",
			'compid' => "4",
			'not'=> 0,
			'data'=> "http://convert.com"
		],
		[
			'entid' => "29",
			'compid' => "6",
			'not'=> 0,
			'data'=> "blog"
		],
		[
			'entid' => "54",
			'compid' => "10",
			'not'=> 0,
			'data'=> "function() {}"
		]
		),
		array(
		[
			'entid' => "50",
			'compid' => "4",
			'not'=> 1,
			'data'=> "http://convert.com"
		]
		),
		array(
		[
			'entid' => "54",
			'compid' => "10",
			'not'=> 1,
			'data'=> "function() {}"
		]
		)
	)
);


// echo json_encode($target);


foreach ($target as $key => $value) {
	print_r($value);
}



























?>