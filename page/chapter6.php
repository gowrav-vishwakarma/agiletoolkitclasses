<?php
		/**
								 Example of Own Class Programme Calling Function
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

        $this->add('Class_PagePlay')->play(6);

        /*======================================
            Class Demo Programe
           	Create A New Class in lib/Div
           	Call Class	  
        =======================================*/

		$div_sample= $this->add('Div');

		$div_sample= $this->add('Class_Div2');

		/*======================================
        	On Every Refresh Get A New Number        	  
        =======================================*/
		
	}
}