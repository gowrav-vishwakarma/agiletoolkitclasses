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
class page_chapter23 extends Page{
	
	function init(){
		parent::init();

		// lister Example *****************


		$list=$this->add('lister');

		// Set Model With Lister / Grid  / MVCGrid / CRUD **************
		$list->setModel('Model_Project');


		$this->add('View_Info')->set('array started here : ');
	
		$list_2=$this->add('lister');
	
		// Set Model With Lister / Grid  / MVCGrid / CRUD **************
		
		$list_2->setSource(array("List-1","List-2","List-3","List-4","List-5"));
		

	}
}