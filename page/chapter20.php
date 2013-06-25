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
class page_chapter20 extends Page{
	function init(){
		parent::init();

		// Export Report From Grid ***********

		$m=$this->add("Model_Project");

		$g=$this->add("Grid");

		$g->add('misc/Export');
		$g->setModel($m);

	}
}