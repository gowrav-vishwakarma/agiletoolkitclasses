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
class page_chapter16 extends Page{
	function init(){
		parent::init();


		// GetAll Record of Database & Count **************
		// GetData From Model ***************

		$cust=$this->add("Model_Customer");
		
		// $cust->load(2);
		// $this->add("Grid")->setModel();

		echo "No of Customer is :==>>>> <br/>" . $cust->count()->getOne();
	
	}
	
}