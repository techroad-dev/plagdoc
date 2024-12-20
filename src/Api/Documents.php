<?php

declare(strict_types=1);
namespace plagdocs\Api;

class Documents extends Api {

	public function list_documents($params) {

		/** Sample parameters for a GET request:
		 	* - report_id: Filter by report_id if need to fetch documents against specific report_id (optional).
			* - order_name: Field by which to sort the results (e.g., 'created_at').
			* - order_type: Order direction, either 'asc' or 'desc'.
			* - limit: Number of results to return per page.
			* - page: Current page number for pagination.
			* - search (string): The search query or keyword to filter results (e.g., 'name of document').
			* - category_tag: Filter by category tag (leave empty for no filter).
		*/


		return $this->request('/list_documents', $params, 'GET');
	}

	public function get_document($params) {

		/**
			* Sample parameters for a GET request to retrieve a document:
			* - document_id (int): The ID of the document to retrieve (e.g., 456).
		*/

		return $this->request('/documents/'.$params['document_id'], $params, 'GET');
	}

	public function add_document($params) {

		/**
			* Sample parameters for a POST request to upload documents:
			* - workspace_id (int): The ID of the workspace where the document will be uploaded (e.g., 101).
			* - user_id (int): The ID of the user uploading the document (e.g., 123).
			* - group_id (int): The ID of the group associated with the document (e.g., 10).
			* - category_tag (string): The category or tag associated with the document (e.g., 'Finance').
			* - myfile_a[0][name] (string): The name of the document (e.g., 'Sample Document').
			* - myfile_a[0][size] (int): The size of the document in bytes (e.g., 102400 for 100KB).
			* - myfile_a[0][file] (string): The document file content encoded as a base64 string.
		*/
		return $this->request('/multi_upload_handler', $params, 'POST');
	}

	public function update_document($params) {

		/**
			* Sample parameters for an UPDATE request to modify a document:
			* - document_id (int): The ID of the document to be updated (e.g., 456).
			* - name (string): The updated name of the document (e.g., 'Updated Document Name').
			* - category_tag (string): The updated category or tag associated with the document (e.g., 'Updated Tag').
		*/

		return $this->request('/documents/'.$params['document_id'], $params, 'POST');
	}

	public function delete_document($params) {

		/**
			* Sample parameters for deleting a exclusion:
			* - document_id (int): The ID of the exclusion to be deleted (e.g., 2).
		*/

		return $this->request('/documents/'.$params['document_id'], $params, 'DELETE');
	}

	public function remove_multiple_documents($params) {

		/**
			* Sample parameters for a DELETE multiple request:
			* - ids (array of int): An array of document IDs to be deleted (e.g., [123, 124, 125]).
		*/

		return $this->request('/remove_multiple_documents', $params, 'DELETE');
	}

	
	
}

?>
