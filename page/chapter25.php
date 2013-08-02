<?php
		/**
									   Example of User Authentication System 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
		*/
class page_chapter25 extends Page {

	function init(){
		parent::init();

       	$this->add('Class_PagePlay')->play(25);


		// User Authentication System *******************

 		// $auth=$this->add('Auth');
   //  	$auth->setModel('User');
   //  	$auth->usePasswordEncryption();
   //  	$auth->check();		
	
		// $this->add('Auth')
		// 	->allow('123','123')
		// 	->check();


		$this->add('BasicAuth')
			->allow('123','123')
			->check();


		


		$this->add('View')->set('Say Hello World !');

		$btn=$this->add('Menu')->addMenuItem('logout');

		// $btn->js('click')->univ()->redirect($this->api->url('chapter25'));

	}
}