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

	
        $this->add('H1')->set('Frame Class Options');
        
        $btn2=$this->add('Button')->setLabel('Next Chapter6');
        $btn2->js('click')->univ()->redirect($this->api->url('chapter6'));

		$frame = $this->add('Frame')
			->setTitle('Hd Agile toolkit User')			
			;


		$this->add('View')->setHtml('
			<Frameset>
				<legand> this is my new frame  </lagend>	
			</Frameset>'

			);	
	}	

}