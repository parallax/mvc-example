<?php

class Dispatcher {
	
	
	function __construct() {
		
		$request = str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['REQUEST_URI']);
		list($null, $controller, $action) = explode('/', $request);
		
		$controller_class = ucfirst($controller) . 'Controller';
		
		define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
		
		// Load Controller
		$this->controller = new $controller_class();
		
		// Provide an easy way for it to remember what it's called, and the action
		$this->controller->setName($controller);
		$this->controller->setAction($action);
		
		$model = ucfirst($controller);
		$this->controller->$model = new $model;
		
		
		// Run the action
		$this->controller->$action();
	}
	
	
	
}
