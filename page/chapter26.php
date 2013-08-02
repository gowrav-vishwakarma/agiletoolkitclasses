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

class page_chapter26 extends Page {
	
	function init(){
		parent::init();

	  	$this->add('Class_PagePlay')->play(26);
		
		/***** create New Form *****/
		$form =$this->add('Form'); /***** add Form *****/ 
		$form->addField('dropdown','cust')->setModel('Customer'); /***** add field drop down with customer list *****/
		$form->addSubmit('Filter'); /***** add button *****/ 

		/***** add projects *****/
		$view=$this->add('View_ProjectList');
		
		/***** add model customer *****/
		$customer=$this->add('Model_Customer');

		/***** check customer id selected or not ( get from form submission ) ***** GOTO->LINE(45) *****/
		if($_GET['customer']){

			$customer->load($_GET['customer']); /***** load one record *****/ 

			$view->setModel($customer); /***** load view with model & ***** GOTO->View->ProjectList *****/
		}

		/***** if form add submit button clicked *****/
		if($form->isSubmitted()){

			/***** view obj reload in form with send data *****/
			$view
				->js()
				->reload(array('customer'=>$form->get('cust'))) /***** pass array as parameter & send value same form *****/ 
				->execute();
				
		}

	}
} 