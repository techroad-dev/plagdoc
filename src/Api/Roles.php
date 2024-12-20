<?php

declare(strict_types=1);
namespace plagdocs\Api;

class Roles extends Api {

	private $roles;

	function __construct() {

		$this->roles = [
			1 => "owner",
			2 => "workspace_manager",
			3 => "member"
		];

	}

	public function list_roles($params) {

		/** Use this for roles list. */
		return $this->roles;
	}

	public function get_role($params) {

		/**
			* Sample parameters for getting a role:
			* - role_id (int): The ID of the role to be searched (e.g., 2).
		*/

		if(!isset($this->roles[$params['role_id']])) {
			return  [ "code"=> 404, "status"=>"failed", "message"=>"Role does not exists!" ];
		}
		return array($params['role_id'] => $this->roles[$params['role_id']]);
	}

	
}

?>
