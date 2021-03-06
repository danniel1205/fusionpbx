<?php

/**
 * plugin_database 
 *
 * @method validate uses authentication plugins to check if a user is authorized to login
 * @method get_domain used to get the domain name from the URL or username and then sets both domain_name and domain_uuid
 */
class plugin_database {

	/**
	 * Define variables and their scope
	 */
	public $debug;
	public $domain_name;
	public $domain_uuid;
	public $user_uuid;
	public $contact_uuid;
	public $username;
	public $password;
	public $key;

	/**
	 * database checks the local database to authenticate the user or key
	 * @return array [authorized] => true or false
	 */
	function database() {

		//set the default status
			$user_authorized = false;

		//check the username and password if they don't match then redirect to the login
			$sql = "select * from v_users where ";
			if (strlen($this->key) > 30) {
				$sql .= "api_key = :key ";
				$parameters['api_key'] = $this->key;
			}
			else {
				$sql .= "lower(username) = lower(:username) ";
				$parameters['username'] = $this->username;
			}
			if ($_SESSION["users"]["unique"]["text"] != "global") {
				//unique username per domain (not globally unique across system - example: email address)
				$sql .= "and domain_uuid = :domain_uuid ";
				$parameters['domain_uuid'] = $this->domain_uuid;
			}
			$sql .= "and (user_enabled = 'true' or user_enabled is null) ";
			$database = new database;
			$row = $database->select($sql, $parameters, 'row');
			if (is_array($row) && @sizeof($row) != 0) {

				//get the domain uuid when users are unique globally
					if ($_SESSION["users"]["unique"]["text"] == "global" && $row["domain_uuid"] != $this->domain_uuid) {
						//set the domain_uuid
							$this->domain_uuid = $row["domain_uuid"];
							$this->domain_name = $_SESSION['domains'][$this->domain_uuid]['domain_name'];

						//set the domain session variables
							$_SESSION["domain_uuid"] = $this->domain_uuid;
							$_SESSION["domain_name"] = $this->domain_name;

						//set the setting arrays
							$domain = new domains();
							$domain->db = $db;
							$domain->set();
					}

				//set the user_uuid
					$this->user_uuid = $row['user_uuid'];
					$this->contact_uuid = $row['contact_uuid'];

				//if salt is not defined then use the default salt for backwards compatibility
					if (strlen($row["salt"]) == 0) {
						$row["salt"] = 'e3.7d.12';
					}

				//compare the password provided by the user with the one in the database
					if (md5($row["salt"].$this->password) == $row["password"]) {
						$user_authorized = true;
					}
					else if (strlen($this->key) > 30 && $this->key == $row["api_key"]) {
						$user_authorized = true;
					}

			}
			unset($result);

		//result array
			$result["plugin"] = "database";
			$result["domain_name"] = $this->domain_name;
			$result["username"] = $this->username;
			if ($this->debug) {
				$result["password"] = $this->password;
			}
			$result["user_uuid"] = $this->user_uuid;
			$result["domain_uuid"] = $this->domain_uuid;
			$result["contact_uuid"] = $this->contact_uuid;
			$result["sql"] = $sql;
			$result["authorized"] = $user_authorized ? 'true' : 'false';

			return $result;
	}
}

?>