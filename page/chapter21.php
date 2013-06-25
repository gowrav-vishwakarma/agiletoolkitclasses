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
class page_chapter21 extends Page{

	function page_index(){
		// parent::init();

		// Add New Fields Grid & Get Value ***********

		$m=$this->add("Model_Project");

		$g=$this->add("Grid");

		// $g->add('misc/Export');
		$g->setModel($m);

		// Add Paginator **********
		$g->addPaginator(10);

		// Field Select For Make Sortable  **************
		$g->getColumn('name')->makeSortable();

		// Add Quick Search ******************
		$g->addQuickSearch(array('name'));


		// Add New Column *****************
		$g->addColumn('Button','Hi');

		// Set NoRecordMessage ************
		$g->setNoRecords("Recotd Nahi Mila ");

		// addOrder ************
		$g->addOrder();

		// Add Expander *******************
		$g->addColumn('expander','hi','Say Hi');


	}


	function page_hi(){

		$this->add('View_Info')->set('Hi :: ' . $_GET['project_id']);
	}

}