<?php
		/**
								     	Example of Export Report From Grid  
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
		*/
class page_chapter20 extends Page{
	function init(){
		parent::init();

	    $this->add('Class_PagePlay')->play(20);

		// Export Report From Grid ***********

		$model=$this->add("Model_Project");

		$grid=$this->add("Grid");

		$grid->add('misc/Export');
		$grid->setModel($model);


	}
}