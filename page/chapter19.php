<?php
		/**
												Example of View 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Qus. We will need all customer list on DropDown box and after Select DropDown Record We Will Get 
			All projects of selected customer in a special view ?
		Ans.	
			Create 2 View its required ******** 
			    lib/View/*.php
			1.View_ProjectList.php 
			2.Project.php
		create 1 template 
			templete/default/view/project.html
		=================================================================================================
		*/
class page_chapter19 extends Page {
	function init(){
		parent::init();

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