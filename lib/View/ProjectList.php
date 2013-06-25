<?php
class View_ProjectList extends View{
	
/**
												Example of view 
										'********************************'
										Example Created by : Rahul Vishnoi
		@example for chapter:26										
**/
		
	/***** override function setModel *****/
	function setModel($model){
		
		/***** check if get parameter model only for @model_customer or another *****/ 
		if (!($model instanceof Model_Customer)) 
			throw $this->exception('Only Customer Model is Allow !'); /***** if not the obj of @model_customer throw exception *****/ 
		

		/***** get all projects of select customer *****/ 
		foreach($p=$model->ref('Project') as $junk){
			
			/** 			
			add( 'View_Name' , 'Class_Property' , 'Template_Spot' , 'Template_Path' ) last three parameter hold array() 
			**/ 
			
			/***** add new view with model & template *****/  
			$this->add('View_Project',null,null,array('view/project'))->setModel($p);
		
		}

		/***** its use for because it cannot be call parent @setModel() function *****/ 
		parent::setModel($model);

	}	
	
}