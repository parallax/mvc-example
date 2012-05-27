<?php

spl_autoload_register(function ($class) {
	if (file_exists('controllers/' . $class . '.php')) {
		include 'controllers/' . $class . '.php';
	} 
	
	if (file_exists('models/' . $class . '.php')) {
		include 'models/' . $class . '.php';
	}
	
	if (file_exists('classes/' . $class . '.php')) {
		include 'classes/' . $class . '.php';
	}
});

function debug($var) {
	echo '<pre>'; 
	print_r($var);
	echo '</pre>';
}

$dispatcher = new Dispatcher();

?>