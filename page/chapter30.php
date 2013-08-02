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
class page_chapter30 extends Page{
	function init(){
		parent::init();

	    $this->add('Class_PagePlay')->play(30);

	    $this->add('Button')
            ->set('Open Page Chapter30help')
            ->js('click')
            ->univ()
            ->frameURL('Create New Project',
                $this->api->url('chapter30help',array('view_id'=>$this->name))
            );

        $this->add('Grid')->setModel('Project');    	


        // is required for refresh ********
        $this->js('reload_me')->reload();

	}
}