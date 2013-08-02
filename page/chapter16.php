<?php
		/**
										Example of get all database record 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		
		=================================================================================================
		*/
class page_chapter16 extends Page{
	function init(){
		parent::init();

       	$this->add('Class_PagePlay')->play(16);

		// GetAll Record of Database & Count **************
		// GetData From Model ***************

		$cust=$this->add("Model_Customer");
		
		// $cust->load(2);
		// $this->add("Grid")->setModel();

		$msg= "No of Customer is  <br/> &nbsp;&nbsp;&nbsp; :=> " . $cust->count()->getOne();
	
		$this->add('H3')->setHtml($msg);

	}
	
}