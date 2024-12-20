<?php

declare(strict_types=1);
namespace plagdocs\Api;

class Reports extends Api {
	
	public function list_reports($params) {

		/**
			* Sample parameters for a GET request to retrieve reports:
			* - order_name (string): Field to order the results by (e.g., 'created_at').
			* - order_type (string): Order direction, either 'asc' or 'desc' (e.g., 'desc').
			* - limit (int): Number of records to retrieve per page (e.g., 10).
			* - page (int): Page number for pagination (e.g., 1).
			* - search (string): The search query or keyword to filter results (e.g., 'My Report').
			* - report_type (string): Type of report (e.g., 'online_plagiarism', 'side_by_side', 'cross_comparison', 'group_comparison').
			* - status (int): Status filter (0 or 1, e.g., 1 for active reports).
			* - check_online (int): Whether to check online sources (0 or 1, e.g., 1 to enable).
		*/
 
		return $this->request('/reports', $params, 'GET');
	}

	public function list_group_reports($params) {

		/**
			* Sample parameters for a GET request to retrieve reports:
			* - order_name (string): Field to order the results by (e.g., 'created_at').
			* - order_type (string): Order direction, either 'asc' or 'desc' (e.g., 'desc').
			* - limit (int): Number of records to retrieve per page (e.g., 10).
			* - page (int): Page number for pagination (e.g., 1).
			* - group_id (string): The ID of the group to filter reports (e.g., '123').
			* - report_type (string): Type of report (e.g., 'online_plagiarism', 'side_by_side', 'cross_comparison', 'group_comparison').
			* - status (int): Status filter (0 or 1, e.g., 1 for active reports).
			* - search (string): The search query or keyword to filter results (e.g., 'report name').
		*/

		return $this->request('/reports/group', $params, 'GET');
	}
	
	public function check_plagiarism($params) {

		/**
			* Sample parameters for a request to generate a report:
			* - report_name (string): The name of the report (e.g., 'online_plagiarism').
			* - report_type (string): The type of the report (e.g., 'Postman Report').
			* - source_text (string): The text to be analyzed or compared (e.g., 'It was surrounded by the Area Capitolina...').
		*/

		return $this->request('/check-plagiarism', $params, 'POST');
	}

	public function add_report($params) {

		/**
			* Sample parameters for a POST request to generate or edit a report:
			* - workspace_id (int): The ID of the workspace where the report is generated (e.g., 101). (optional)
			* - user_id (int): The ID of the user generating the report (e.g., 123). (optional)
			* - existing_report_id (string|null): The ID of the existing report to edit or update (e.g., '456'), or null if creating a new report.
			* - report_name (string): The name of the report (e.g., 'Untitled Report').
			* - report_type (string): Type of the report (e.g., 'online_plagiarism', 'side_by_side', 'cross_comparison', 'group_comparison').
			* - ai_detection (int): Flag to enable or disable AI detection (1 for enabled, 0 for disabled).
			* - online_group (int): Flag to enable online group comparison (1 to enable, 0 to disable).
			* - source_text (string): The source text to be analyzed (e.g., 'Testing Source Text').
			* - exclude_matches (string): Text or names to exclude from the report (e.g., 'Sample Firstname Brand Name').
			* - exclude_quotes (string): Text or quotes to exclude from the report (e.g., 'Sample Lastname').
			* - source_arr[] (array of int): Array of source document IDs (e.g., [101, 102]).
			* - target_arr[] (array of int): Array of target document IDs (e.g., [201, 202]).
			* - removed_ids[] (array of int): Array of document IDs to remove during edit or update (e.g., [301, 302]).
			* - feedback (string): Text for providing feedback on the report (e.g., 'Good report overall').
		*/

		return $this->request('/reports', $params, 'POST');
	}

	public function get_report($params) {

		/**
			* Sample parameters for a GET request to retrieve a report:
			* - workspace_id (int): The ID of the workspace containing the report (e.g., 101).
			* - report_id (int): The ID of the report to retrieve (e.g., 123).
		*/

		return $this->request('/reports/'.$params['report_id'], $params, 'GET');
	}
 
	public function rescan_report($params) {

		/**
			 * Sample parameters for a request to rescan a report:
			 * - workspace_id (int): The ID of the workspace where the report exists (e.g., 101).
			 * - report_id (int): The ID of the report to be rescanned (e.g., 123).
		*/

		return $this->request('/rescan_report', $params, 'GET');
	}


	public function get_attachment_report($params) {

		/**
			* Sample parameters for a request to get attachment report:
			* - workspace_id (int): The ID of the workspace containing the report (e.g., 101).
			* - report_id (int): The ID of the report to update (e.g., 123).
		*/

		return $this->request('/get-attachment-report/'.$params['report_id'], $params, 'GET');
	}

	public function get_reports_statistics($params) {

		/**
			* Sample parameters for a request involving a workspace and user:
			* - workspace_id (int): The ID of the workspace (e.g., 101).
			* - user_id (int): The ID of the user (e.g., 123).
		*/

		return $this->request('/get-reports-statistics', $params, 'GET');
	}

	public function delete_report($params) {

		/**
			 * Sample parameters for a request to retrieve a report:
			 * - report_id (int): The ID of the report to retrieve (e.g., 123).
		*/

		return $this->request('/reports/'.$params['report_id'], $params, 'DELETE');
	}


	public function report_feedback_or_rename($params) {

		/**
			* Sample parameters for a request to submit feedback on a report:
			* - report_id (int|string): The ID of the report to provide feedback for (e.g., '17225989303225387').
			* - report_name (string): The new name for the report (e.g., 'Updated Report Name').
			* - feedback (string): The feedback provided for the report (e.g., 'Excellent Work!').
		*/
		
		return $this->request('/reports/'.$params['report_id'], $params, 'POST');
	}


}

?>
