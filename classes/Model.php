<?php

class Model {
	
	// This stores the database handle for the MySQL connection 
	var $connection; 
	
	function __construct() {
		$this->name = get_called_class();
		$this->table = strtolower(get_called_class());
		
		$this->connection = mysqli_connect('127.0.0.1', 'root', '', 'example');
	}
	
	function sql($query) {
		$res = mysqli_query($this->connection, $query);
		$return = array();
		
		while($row = mysqli_fetch_assoc($res)) {
			$return[] = $row;
		}
		
		return $return;		
	}
	
	function find($type, $conditions = array()) {
		switch ($type) {
			case 'all':
				return $this->sql('SELECT * FROM ' . strtolower(get_called_class()));
				break;
			
			case 'first':
				break;
		}
	}
	
}