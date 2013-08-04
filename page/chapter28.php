<?php
		/**
								     	Example of Infinite Add Form  
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
		*/
class page_chapter28 extends Page{
	function init(){
		parent::init();

	    $this->add('Class_PagePlay')->play(28);


		$model=$this->add("Model_Project");

		$abc=$this->add('misc/InfiniteAddForm');

		$abc->setModel($model);


	}
}