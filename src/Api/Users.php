<?php

declare(strict_types=1);
namespace plagdocs\Api;

class Users extends Api {
 
	public function list_users($params) {

		/** Sample parameters for a GET request:
			* - sort: Field by which to sort the results (e.g., 'date').
			* - order: Order direction, either 'asc' or 'desc'.
			* - limit: Number of results to return per page.
			* - page: Current page number for pagination.
			* - search (string): The search query or keyword to filter results (e.g., 'David Warner').
		*/
			
		return $this->request('/users', $params, 'GET');
	}

	public function get_user($params) {

		/**
			 * Sample parameters for a GET request to retrieve user information:
			 * - id (int): The ID of the user to retrieve (e.g., 123).
		*/


		return $this->request('/users/'.$params['user_id'], $params, 'GET');
	}

	public function add_user($params) {


		/** Sample parameters for a POST request:
			* - email (string): The email address (e.g., 'testing@plagdocs.com').
			* - password (string): The password for the account (e.g., '12345').
			* - role_id (int): The role ID assigned to the user (e.g., 2 for workspace manager, 3 for member).
			* - first_name (string): The user's first name (e.g., 'Sample First Name').
			* - last_name (string): The user's last name (e.g., 'Sample Last Name').
			* - profile_image (string): The user's profile picture, provided as a base64-encoded image.
		*/

		return $this->request('/users', $params, 'POST');
	}

	public function update_user($params) {

		/**
			* Sample parameters for an UPDATE request:
			* - email (string): The updated email address (e.g., 'newemail@plagdocs.com').
			* - password (string): The updated password (e.g., 'newpassword').
			* - role_id (int): The updated role ID assigned to the user (e.g., 2 for workspace manager, 3 for member).
			* - first_name (string): The updated first name (e.g., 'Updated First Name').
			* - last_name (string): The updated last name (e.g., 'Updated Last Name').
			* - profile_image (string): The updated profile picture, provided as a base64-encoded image.
			* - status_id (int): Status (1 or 2, e.g., 2 for active).
		*/

		return $this->request('/users/'.$params['user_id'], $params, 'PUT');
	}


	public function delete_user($params) {

		/**
			* Sample parameters for deleting a user:
			* - user_id (int): The ID of the user to be deleted (e.g., 123).
		*/

		return $this->request('/users/'.$params['user_id'], $params, 'DELETE');
	}
  
}

?>
