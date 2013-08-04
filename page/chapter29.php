<?php
		/**
						     	Example of Open a Page by Javascript in New Frame
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		see more project:query->page:enquiry
		=================================================================================================
		*/
class page_chapter29 extends Page{
	function init(){
		parent::init();

	    $this->add('Class_PagePlay')->play(29);


	    $this->add('Button')

	    	// Button Title ***********
            ->set('Open Page Chapter9')
        
            ->js('click')
        
            ->univ()
         
            // Frame Title*****************
            ->frameURL('Create New Project',
        
            	// URL *******************, Extra Use GET[] Method*******
                $this->api->url('chapter9',array('view_id'=>$this->name))
            );


	}
}