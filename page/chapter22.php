<?php 
		/**
												Example of View 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================

		=================================================================================================
		*/
class page_chapter22 extends Page{
	
	function init(){
		parent::init();

		// MVCGrid *****************

		$g=$this->add('MVCGrid')->setModel('Model_Project');
		
		// Add Paginator **********
		// $g->addPaginator(10);


	}
}