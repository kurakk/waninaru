<?php
class ContactsController extends AppController{
	var $uses = array();

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index');
	}

	function index(){
	}

}

?>