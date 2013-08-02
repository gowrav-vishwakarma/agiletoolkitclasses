<?php
	/**
						     	  Example of add condition on query out of the Model 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
	*/

class page_chapter32 extends Page {

	function init(){
		parent::init();

		$this->add('Class_PagePlay')->play(32);

		/***  Create Model Object ***/
		$f=$this->add('Model_Project');

		/*** Add Condition on Model Object ***/
		$f->addCondition('name','like','%swa%');

		/*** Load Any Record ***/
		$f->tryLoadAny();

		/*** if record found then fill Condition ***/
		if($f->loaded())
			$x= "project name is <strong>".$f['name']. "</strong> . dsecription is <strong>".$f['description'] . '</strong>.';
	
		$this->add('View')->setHtml($x);
	}
}