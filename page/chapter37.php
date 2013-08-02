<?php
	/**
						     	  		  Example of SMLite 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
	*/

class page_chapter37 extends Page {

	function init(){
		parent::init();

		$this->add('Class_PagePlay')->play(37);

		// add SMLite
		$t=$this->add('SMLite');

		// LoadTemplate *****
        $t->loadTemplate('greeting');

        // write this text in "from" tag ***
        $t->trySet('from','i m from bhilwara');
		        
		$this->add('View')
			->set(
				// this is to be writable code ***	
				$t->render()
		
			);



	}
}