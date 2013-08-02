<?php 
		/**
												Example of MVC GRID 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================

		=================================================================================================
		*/
class page_chapter22 extends Page{
	
	function init(){
		parent::init();

       	$this->add('Class_PagePlay')->play(22);

		// MVCGrid *****************

		$g=$this->add('MVCGrid')->setModel('Model_Project');
		
		// Add Paginator **********
		// $g->addPaginator(10);


	}
}