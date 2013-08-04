<?php
	/**
						     	  		  Example of Style Sheet Classes 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
	*/

class page_chapter36 extends Page {

	function init(){
		parent::init();

		$this->add('Class_PagePlay')->play(36);


		$xx=$this->add('View');

		// Info_Error Class is to be used ****
		$xx->set('Hi')->addClass('atk-notification ui-state-error ui-corner-all ');

		// $xx->on('click',$xx->js()->hide());
	}
}