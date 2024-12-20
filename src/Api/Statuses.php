<?php

declare(strict_types=1);
namespace plagdocs\Api;

class Statuses extends Api {

	private $list_statuses;

	function __construct() {

		$this->list_statuses = [
			1 => "inactive",
			2 => "active",
			3 => "blocked",
			4 => "expired",
			5 => "failed",
			6 => "pending",
			7 => "low_credit",
		];

	}

	public function list_statuses($params) {

		/** Use this for statuses list. */
		return $this->list_statuses;
	}

	public function get_status($params) {

		/**
			* Sample parameters for getting a status:
			* - status_id (int): The ID of the status to be searched (e.g., 2).
		*/

		if(!isset($this->list_statuses[$params['status_id']])) {
			return  ["status"=>"failed", "message"=>"Status does not exists!"];
		}
		return array($params['status_id'] => $this->list_statuses[$params['status_id']]);
	}

	
}

?>
