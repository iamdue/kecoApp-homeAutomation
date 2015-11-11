<?php

class Env{

	private $enviromentVariables;

	function __construct(){
		$this->enviromentVariables = new stdClass();
	}

	public function getProcessList(){}
	public function startProcess(){}
	public function killProcess(){}
	public function getProcessById(){}
	public function getProcessByName(){}
	public function killAllProcess(){}
	public function exec(){}

}

?>