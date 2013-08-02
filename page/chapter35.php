<?php
	/**
						     	  			Example of PlayGround 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
	*/

class page_chapter35 extends Page {

	function init(){
		parent::init();

		$this->add('Class_PagePlay')->play(35);

		$x="please click to view all type item made by Agile Toolkit in Single Page and the page name is playground. link are <a href='?page=playground'>Click me to Preview PlayGround</a>";
		$this->add('View')->setHtml($x);

	}
}