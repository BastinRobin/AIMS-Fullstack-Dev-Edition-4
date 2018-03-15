<?php




	class User {


		/**
		 * User to check if the given username and 
		 * password are matching in user table
		 * @param  [String] $username [username]
		 * @param  [String] $password [hashed string]
		 * @return [Boolean]           [True]
		 */
		private function check_permission($username, $password) {

		}

		
		/**
		 * Login is used to authenticated the user into the app
		 * by checking the permission 
		 * @param  [string] $username [description]
		 * @param  [string] $password [hashed string]
		 * @return [Null]           [Doing a redirect no return]
		 */
		function login($username, $password) {

			// first get the username and password
			// go to the user table and check if given 
			// username and password matches
			// if matched return that row
			// return message of authentication incorrect

		}


		/**
		 * Logout is used to destroy the session and
		 * redirect to the given url
		 * @return [None] [No return type only redirect]
		 */
		function logout() {

		}




	}



	$user = new User;
	$user->login('bastinrobin', 'asdagdgwewcsdfs');







?>