<?php
	/**
						     	  			Example of Date Function 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
	*/

class page_chapter33 extends Page {

	function init(){
		parent::init();

		$this->add('Class_PagePlay')->play(33);


		$x=2;

		$x= date('y',strtotime('1970-'.$x.'-01')) . "<br>" ;
		/*
			M = Feb
			m = 02
			
			D = Sun (dayof the day)
			d = 01 (date day)

			Y = 1970
			y = 70

		*/
		$this->add('View')->setHtml($x);

		$y= date('M Y, d' , strtotime("2013-04-21"));

		$this->add('View')->setHtml($y);

		// Current Date 
		$z= date('Y-m-d');
		
		$this->add('View')->setHtml($z);

	}
}