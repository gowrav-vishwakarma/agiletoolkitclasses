<?php 
		/**
												Example of lister 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
		*/

class page_chapter23 extends Page{
	
	function init(){
		parent::init();

       	$this->add('Class_PagePlay')->play(23);


		// lister Example *****************
		$list=$this->add('lister');

		// Set Model With Lister / Grid  / MVCGrid / CRUD **************
		$list->setModel('Model_Project');


		$this->add('View_Error')->set('array started here : ');
	
		$list_2=$this->add('lister');
	
			// Set Model With Lister / Grid  / MVCGrid / CRUD **************
		$list_2->setSource(array("List-1","List-2","List-3","List-4","List-5"));
		

	}
}