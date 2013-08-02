<?php
	/**
						     	  			Example of Formatter
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Note: Create File in ../lib/Grid.php 	
		=================================================================================================
	*/

class page_chapter34 extends Page {

	function init(){
		parent::init();

		$this->add('Class_PagePlay')->play(34);

		// add crud 
		$crud = $this->add('CRUD');

		// set model on crud ***
		$crud->setModel('Complaints');

		// check if grid or not ***
		if($crud->grid){
			
			// add new column in grid ***
			$sr=$crud->grid->addColumn('text','sr');

			// add column "sr" add formatter ***
			$sr->setFormatter('sr','sno');

			// make total in particullar field ***	
			$crud->grid->addTotals(array('Cost'));

			// add template + dynamic coding 			
			$crud->grid->addColumn('template','MyTemplate')->setTemplate('<a href="<?$name?>"><?$name?></a>');

			// add quick serch option on right side of the grid **
			$crud->grid->addQuickSearch(array('name'));

			// export reports *** 
			$crud->grid->add('misc/Export');
		}

	}
}