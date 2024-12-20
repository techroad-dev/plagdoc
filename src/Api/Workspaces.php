<?php

declare(strict_types=1);
namespace plagdocs\Api;

class Workspaces extends Api {


	public function list_workspaces($params) {

		/** Sample parameters for a GET request:
			* - sort: Field by which to sort the results (e.g., 'date').
			* - order: Order direction, either 'asc' or 'desc'.
			* - limit: Number of results to return per page.
			* - page: Current page number for pagination.
			* - search (string): The search query or keyword to filter results (e.g., 'My Workspace').
		*/

		return $this->request('/workspaces', $params, 'GET');
	}

	public function get_workspace($params) {

		/**
			* Sample parameters for a GET request to retrieve a single resource:
			* - workspace_id: The ID of the resource to fetch (int, e.g., 123).
		*/

		return $this->request('/workspaces/'.$params['workspace_id'], $params, 'GET');
	}

	public function add_workspace($params) {

		/** Sample parameters for a POST request:
		 	* - name: The name of the workspace (string, e.g., 'Sample Workspace').
			* - brand_name: The name of the brand (string, e.g., 'Sample Brand Name').
			* - logo: The logo of the brand, provided as a base64-encoded image (string).
			* - exclude_matches: Option to exclude matches (int, 0 or 1).
			* - exclude_quotes: Option to exclude quotes (int, 0 or 1).
			* - exclude_bibliography: Option to exclude bibliography (int, 0 or 1).
		*/

		return $this->request('/workspaces', $params, 'POST');
	}

	public function update_workspace($params) {

		/**
			* - workspace_id (int): The ID of the resource to be updated (e.g., 123).
			* - name: The name of the workspace (string, e.g., 'Sample Workspace Updated').
			* - logo (string): The updated logo of the brand, provided as a base64-encoded image.
			* - exclude_matches: Option to exclude matches (int, 0 or 1).
			* - exclude_quotes: Option to exclude quotes (int, 0 or 1).
			* - exclude_bibliography: Option to exclude bibliography (int, 0 or 1).
			* - status (string): The updated status of the brand, either 'active' or 'inactive'.
		*/

		return $this->request('/workspaces/'.$params['workspace_id'], $params, 'PUT');
	}
 
	public function delete_workspace($params) {

		/**
			* Sample parameters for a DELETE request:
			* - workspace_id: The ID of the resource to be deleted (int, e.g., 123).
		*/

		return $this->request('/workspaces/'.$params['workspace_id'], $params, 'DELETE');
	}
	

}


?>
