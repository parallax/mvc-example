<?php


class Controller {
	
	public $name = 'Controller';
	public $action = 'index';

	private $viewVars = array();
	
	function __construct() {

	}
	
	function set($key, $value) {
		$this->viewVars[$key] = $value;
	}

	function setName($name) {
		$this->name = $name;
	}
	
	function setAction($action) {
		$this->action = $action;
	}
	
	function render() {
		extract($this->viewVars);
		require ROOT . '/views/' . $this->name . '/' . $this->action . '.php';
	}
	
	function __destruct() {
		$this->render();
	}
}
