<?php

declare(strict_types=1);
namespace plagdocs\Api;

class Exclusions extends Api {
 
	public function list_exclusions($params) {

		/** Sample parameters for a GET request:
			* - sort: Field by which to sort the results (e.g., 'date').
			* - order: Order direction, either 'asc' or 'desc'.
			* - limit: Number of results to return per page.
			* - page: Current page number for pagination.
			* - search (string): The search query or keyword to filter results (e.g., 'abc').
		*/

		return $this->request('/exclusion', $params, 'GET');
	}

	public function get_exclusion($params) {

		/**
			* Sample parameters for deleting a exclusion:
			* - exclusion_id (int): The ID of the exclusion to be deleted (e.g., 2).
		*/

		return $this->request('/exclusion/'.$params['exclusion_id'], $params, 'GET');
	}

	public function add_exclusion($params) {

		/**
			* Sample parameters for a POST request to set exclusions:
			* - urls[] (array of string): A list of URLs to exclude (e.g., ['www.abc.com', 'www.xyz.com']).
			* - phrases[] (array of string): A list of phrases to exclude (e.g., ['Sample Phrase 1', 'Sample Phrase 2']).
			* - character (string): A specific character to exclude (e.g., '@').
			* - replace_with (string): The character or string to replace excluded items with (e.g., '***').
		*/

		return $this->request('/exclusion', $params, 'POST');
	}

	public function update_exclusion($params) {

		/**
			* Sample parameters for an UPDATE request to modify exclusions:
			* - exclusion_id (int): The ID of the exclusion rule to be updated (e.g., 123).
			* - url: Updated single url to exclude (e.g., 'www.example.com').
			* - phrase: Updated single phrase to exclude (e.g., 'Updated Phrase 1').
			* - character (string): Updated specific character to exclude (e.g., '#').
			* - replace_with (string): Updated character or string to replace excluded items with (e.g., '---').
		*/

		return $this->request('/exclusion/'.$params['exclusion_id'], $params, 'PUT');
	}

	public function delete_exclusion($params) {

		/**
			* Sample parameters for a DELETE request to remove exclusions:
			* - id (int): The ID of the exclusion rule to be deleted (e.g., 123).
		*/
		
		return $this->request('/exclusion/'.$params['exclusion_id'], $params, 'DELETE');
	}

}

?>
