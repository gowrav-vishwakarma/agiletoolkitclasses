<?php
	/**
						     	  		  Example of 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		1. Create field "ord" in your database table
		2. $grid->add('gridorder/Controller_GridOrder');
		=================================================================================================
	*/

class page_chapter39 extends Page {

	function init(){
		parent::init();

		$this->add('Class_PagePlay')->play(39);


		$crud=$this->add('CRUD')->setModel('Project');

		if($crud->grid)
			$crud->grid->add('gridorder/Controller_GridOrder');

	}
}