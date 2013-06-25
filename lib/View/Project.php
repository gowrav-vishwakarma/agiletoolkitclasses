<?php

class View_Project extends View {
	
/**
												Example of view 
										'********************************'
										Example Created by : Rahul Vishnoi
		@example for chapter:26 / chapter:27										
**/

	/***** override function setModel *****/
	function setModel($model){

		/***** commneted code is shoud be run  *****/
		// $this->add('H1',null,'name')->set($model['name']);

		/** 
		add( 'View_Name' , 'Class_Property' , 'Template_Spot' , 'Template_Path' ) 
		**/ 

		/***** trySet() function set model Field name value in "name" spot->it is a template part *****/
		$this->template->trySet('name',$model['name']);
		
		/***** button add in "btn" spot *****/ 
		$this->add('Button',null,'btn')
			->js('click')
			->univ()
			->frameURL('frame_title',$this->api->url('chapter26')) /***** frameURL('new_popup_form_title' , 'page_url' ) *****/
			;

		/***** 
			$this->api->url('page_name',array('key'=>'value'));
			array pass more parameters 
		*****/

		/***** its use for because it cannot be call parent setModel() function *****/ 
		parent::setModel($model);

	}

}