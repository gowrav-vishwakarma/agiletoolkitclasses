<?php
		/**
										  Example of Multi Grid Expander 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Qus. how to work multi grid expander  
		Ans.	
	
		=================================================================================================
		*/
class page_chapter12 extends Page {

	function page_index(){
		// parent::init();

    	$this->add('Class_PagePlay')->play(12);

		// Expander Example *****************************************************

		$model_customer=$this->add('Model_Customer');

		$grid=$this->add('Grid');

		$grid->setModel($model_customer);

		$grid->addColumn('expander','projects','Show Projects');
	
	}
	
	function page_projects()
	{
		
		// $this->stickey('customer_id');
	   	$this->api->stickyGET('customer_id');

	   	$b=$this->add('Model_Project')->addCondition('customer_id',$_GET['customer_id']);
    	// $b->loadAny($_GET['customer_id']);

    	// if($b->loaded()){
	    	
	    	$crud=$this->add('CRUD');
	    	$crud->setModel($b);
	    	if(!$crud->isEditing()){
	    		$crud->grid->addColumn('expander','complaints',"Complaints");
	    	}

    	// }else{
    	// 	$this->add('View_Error')->set('This Customer Have No Projects !');
    	// }
	}

	function page_projects_complaints()
	{
	
	   	$this->api->stickyGET('project_id');

	   	$model_complaints=$this->add('Model_Complaints')->addCondition('project_id',$_GET['project_id']);

		$grid=$this->add('Grid');

		$grid->setModel($model_complaints);

		$grid->addColumn('expander','follows',"Follow - Up");
	}

	function page_projects_complaints_follows()
	{
	
	   	$this->api->stickyGET('complaints_id');

	   	$model_follows=$this->add('Model_Follows')->addCondition('complaints_id',$_GET['complaints_id']);

		$grid=$this->add('Grid');

		$grid->setModel($model_follows);

	// 	$grid->addColumn('expander','follows',"Follow - Up");
	
	}


}