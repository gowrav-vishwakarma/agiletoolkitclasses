<?php
		/**
										Example of Own Class Tag Programme
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Qus. how to make class & call in agile toolkit ?
		Ans.	

		=================================================================================================
		*/ 

class page_chapter6 extends Page{
	
	function init(){

		parent::init();

        $this->add('H1')->set('Create Your Own Class Example Div Class in lib/Div.php');
        
        $btn2=$this->add('Button')->setLabel('Next Chapter7');
        $btn2->js('click')->univ()->redirect($this->api->url('chapter7'));
			

        /*======================================
            Class Demo Programe
           	Create A New Class in lib/Div
           	Call Class	  
        =======================================*/

		$div_sample= $this->add('Div');

		/*======================================
        	On Every Refresh Get A New Number        	  
        =======================================*/
		
	}
}