<?php

class ArticlesController extends Controller {
	
	function index() {
		
		$this->set('articles', $this->Articles->find('all'));
		$this->set('name', 'James');
	}
	
}


?>