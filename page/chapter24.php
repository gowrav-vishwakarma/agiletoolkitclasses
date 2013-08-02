<?php
		/**
												Example of View 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
		*/
class page_chapter24 extends Page{
	
	function init(){
		parent::init();

	   	$this->add('Class_PagePlay')->play(24);

		// View Examples **********************

		// Create Folder On lib/view/demo.php ***********
		// Session Included in **************************

		$v1=$this->add('View_Demo');
		$v2=$this->add('View_Demo');
		// echo $v1->name;
		// echo "<br/>";
		// echo $v2->name;
	}
}