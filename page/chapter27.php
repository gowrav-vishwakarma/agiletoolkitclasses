<?php
		/**
												Example of view 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Qus. We will need all customer list on DropDown box and after Select DropDown Record We Will Get 
			All projects of selected customer in a special view ?

		Ans. 	
		
		Create 1 View its required ******** 
		    lib/View/*.php
			1.Project.php
		create 1 template 
			templete/default/view/project.html
		=================================================================================================
		*/

class page_chapter27 extends Page{
	
	function init(){
		parent::init();

		

		// $customer = $this->add('Model_Customer');

		/***** create New Form *****/
		$form =$this->add('Form'); /***** add Form *****/
		$form->addField('dropdown','cust')->setModel('Customer'); /***** add field drop down with customer list *****/
		$form->addSubmit('Filter'); /***** add button *****/ 

		/***** create a new extended view *****/ 
		$view=$this->add('View');

		/***** check customer id selected or not ( get from form submission ) ***** GOTO->LINE(45) *****/
		if($_GET['customer']){

			/***** add model with objects & where conditions *****/
			$p=$this->add('Model_Project');
			$p->addCondition('customer_id',$_GET['customer']);

			/***** all projects get by for each loop *****/
			foreach($p as $junk){

				/***** directly load @view_project *****/
				$view->add('View_Project',null,null,array('view/project'))->setModel($p);
			}	
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