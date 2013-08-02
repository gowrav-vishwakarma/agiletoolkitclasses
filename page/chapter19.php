<?php
		/**
							Example of Add Expression With Dynamically Functionality  
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================

		=================================================================================================
		*/
class page_chapter19 extends Page {
	function init(){
		parent::init();

       	$this->add('Class_PagePlay')->play(19);

		// Add Expression With Dynamically Functionality ****
		// **************************************************


		$customer = $this->add('Model_Customer');
		$this->add('View')->set("Total Number Of Customers " .$customer->count());

		$customer=$this->add('Model_Customer');
		
		$customer->addExpression('projects_count')->set(function($m,$q){
			
			return $m->refSQL('Project')->count();

		});
		
		//$customer->addExpression('complaints_count')->set(function($m,$q){
		//	return $m->refSQL('Project')->refSQL('Complaints')->count();
		//});

		$grid=$this->add('Grid');
		$grid->setModel($customer,array('name','projects_count','complaints_count'));

	}
}