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
class page_chapter11 extends Page{
	
	function page_index(){

	
				// For Expander Requires Bock This Content Change The Name of Init() into page_index()
		// parent::init();

		//Adding CRUD

		$btn=$this->add('Button')->set('Count CheckBox');
		
		$crud=$this->add('CRUD',array('allow_del'=>false));


		

		$crud->setModel('Model_Project',array("name"),array("name","progress"));

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