<?php
		/**
												Example of CRUD / Grid Expander 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Qus. Grid Function's 
		Ans.	
			Exapnder Same Class Function for Create Page
			reuired:
			1. init() change name page_index()
			2.  

		=================================================================================================
		*/
class page_chapter11 extends Page{
	
	function page_index(){

	
		/* 
		For Expander Requires Bock This Content Change
		The Name of Init() into page_index()
		*/

		// parent::init();

	    $this->add('Class_PagePlay')->play(11);

		//Adding CRUD
		$crud=$this->add('CRUD');


		$crud->setModel('Model_Project');

		/**** Auto Create Crud With Expander ****/
		// $crud->addRef("Complaints");

		$crud->grid->addQuickSearch(array("name"));
		$crud->grid->addPaginator(10);


    	if(!$crud->isEditing()){		

	    		$crud->grid->addColumn('expander','complaints',"Complaints");
	    		$crud->grid->addColumn('prompt','P','Prompt');
	    

    	}
	
	}

	function page_complaints(){

		$this->add('View_Hint')->set("Hellow Project is ::=> " . $_GET['project_id']);
	}

	function page_p(){
		$this->add('H1')->set('Says :-> Hellow :: ' . $_GET['project_id']);
	}
	
}