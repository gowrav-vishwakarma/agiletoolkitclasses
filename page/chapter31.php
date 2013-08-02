<?php
		/**
						     	          Example of javascript calling
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		create file
		templates->js->msg.js
		=================================================================================================
		*/
class page_chapter31 extends Page{

	function init(){
		parent::init();

	    $this->add('Class_PagePlay')->play(31);
		

		$btn=$this->add('Button')->set('Javascript Calling Example Technique:1');

		$btn2=$this->add('Button')->set('Javascript Calling Example Technique:2');

		/*
			Technique 1. runtime load file & call *** *******************
		*/

		$btn->js('click')->_load('msg')->univ()->showMsg('technique:1 = Hellow World');

		
		/*
			Technique 2. ************************************************ 
		*/		

	    // dynamically add javascript file  ********
		$this->api->jui->addStaticInclude('msg');
		
		$btn2->js('click')->univ()->showMsg('technique:2 = Hello World Just Ckhering Example');

	}
}