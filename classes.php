<?php


	class Dog {

		// Attributes of a class
		public $eyes = 2;
		private $legs = 4;
		private $color = "black";


		// Methods of the class
		function walks() {
			print '-> -> -> ->';
		}


		function bark() {
			print 'bhou bhou ;)';
		}

		function jumps() {
			print '^ ^ ^ ^';
		}

	}



	// Instantiating the class 
	
	$dog = new Dog;

	$dog->eyes = 4;

	$dog->jumps();

?>