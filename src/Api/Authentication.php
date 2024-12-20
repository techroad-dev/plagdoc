<?php

declare(strict_types=1);
namespace plagdocs\Api;

class Authentication extends Api {

	public function authenticate($params) {
			
		/** Define the parameters to include in the POST request:
		 * 	- $params = ['api_key'=> 'API_KEY', 'api_secret'=> 'SECURET_KEY'];
		*/

		return $this->authentication_api($params);
	}

}


?>
