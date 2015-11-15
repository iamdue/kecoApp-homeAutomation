<?php

namespace Modules{

	class Api {

		public $db;
		public $config;

		function __construct(){
			global $config;
			$this->config = $config;
			$this->db = new db("mysql:host=".$config["db"]["db_host"].";port=".$config["db"]["db_port"].";dbname=".$config["db"]["db_name"], $config["db"]["db_user"] ,$config["db"]["db_pass"]);

		}

	}
}


?>