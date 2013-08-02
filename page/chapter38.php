<?php
	/**
						     	  		  Example of AuthTest
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
	*/

class page_chapter38 extends Page {

	function init(){
		parent::init();

		$this->add('Class_PagePlay')->play(38);

		// If you want to use whitelist-based auth check, call check() from Frontend.php, init() method
        $this->api->auth->check();

        $this->add('HtmlElement')
            ->setElement('P')
            ->set('Successfully authenticated');

        $this->add('Button')->set('Logout')
            ->js('click')->univ()->location($this->api->getDestinationURL('logout'));

	}
}