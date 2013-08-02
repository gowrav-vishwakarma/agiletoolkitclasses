<?php

        /**
                                             Example of Class *View
                                        '********************************'
                                Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
        *//*
        =================================================================================================
        Qus. add('View') function ->options ->parameter ->etc ?
        Ans.    
        =================================================================================================
        */

class page_configration extends Page {
	
	function init(){
		parent::init();


        /***** add H1 for title *****/
        $this->add('H1')->setHtml('Agile Configration / Require Settings');

        /***** Move on Previous Page *****/         
        $btnPrevious=$this->add('Button')->setLabel('Previous : Welcome Page');
        $btnPrevious->js('click')->univ()->redirect($this->api->url('index'));

        /***** Move on Next Page *****/         
        $btnNext=$this->add('Button')->setLabel('Next : Chpater Index');
        $btnNext->js('click')->univ()->redirect($this->api->url('chapterIndex'));

        /***** break line ******/
        $this->add('HtmlElement')->setHtml('</br>');



	}

    /* This Function Made For Automatically Call Given Templates */
    function defaultTemplate(){
        return array('page/configration');

    }
}	

