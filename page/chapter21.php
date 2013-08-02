<?php
		/**
												Example of Grid 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
		*/
class page_chapter21 extends Page{

	function page_index(){
		// parent::init();

       	$this->add('Class_PagePlay')->play(21);

		// Add New Fields Grid & Get Value ***********

		$m=$this->add("Model_Project");

		$g=$this->add("Grid");

		// $g->add('misc/Export');
		$g->setModel($m);

		// Add Paginator **********
		$g->addPaginator(10);

		// Field Select For Make Sortable  **************
		$g->getColumn('name')->makeSortable();

		// Add Quick Search ******************
		$g->addQuickSearch(array('name'));


		// Add New Column *****************
		$g->addColumn('Button','Hello World');

		// Set NoRecordMessage ************
		$g->setNoRecords("Recotd Nahi Mila ");

		// addOrder ************
		$g->addOrder();

		// Add Expander *******************
		$g->addColumn('expander','hi','Say Hi');


	}


	function page_hi(){

		$this->add('View_Info')->set('Hi :: ' . $_GET['project_id']);
	}

}