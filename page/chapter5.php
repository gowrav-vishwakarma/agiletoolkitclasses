<?php
		/**
												Example of Frame 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Qus. describe frame ?
		Ans.	

		=================================================================================================
		*/

class page_chapter5 extends Page {
	
	function init(){

		parent::init();

        $this->add('Class_PagePlay')->play(5);
  

		$frame = $this->add('Frame')
			->setTitle('Frame Example Agile toolkit User')			
			;

		$frame->add('View')->set('Swastik E-Tech Development / Gyan Shila Education Consultancy / Royal Money Fin. Cop.');	

		$this->add('View')->setHtml('
			<Frameset>
				<legand> this is my new frame  </lagend>	
			</Frameset>'

			);	
	}	

}