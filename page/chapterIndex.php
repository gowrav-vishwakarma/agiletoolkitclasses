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

class page_chapterIndex extends Page {
	
	function init(){
		parent::init();

        /***** add H1 for title *****/
        $this->add('H1')->setHtml('Index of Chapters');

        /***** Move on Previous Page *****/         
        $btnPrevious=$this->add('Button')->setLabel('Previous : Configration');
        $btnPrevious->js('click')->univ()->redirect($this->api->url('configration'));

        /***** Move on Next Page *****/         
        $btnNext=$this->add('Button')->setLabel('Next : Chapter:1');
        $btnNext->js('click')->univ()->redirect($this->api->url('chapter1'));

        /***** break line ******/
        $this->add('HtmlElement')->setHtml('</br>');

        /***** import titles from lib/class/title.php *****/
        $title=$this->add('Class_Title')->title_array();

        /*** loop is used for automatically create Buttons ***/
        $available_index=count($title);
        
        for($loop=1;$loop<=$available_index;$loop++){

            $this->add('View',null,'title_chapter' . $loop)->setHtml('<a href="?page=chapter'. $loop .'">'.$title[$loop] . '</a>')
                // ->addClass('section-heading')
            ;

            /***** GOTO Direct Chapter:$loop ******/
            $this->add('Button',null,'chapter' . $loop)
            ->setLabel('Chapter : ' . $loop)
            ->js('click')
            ->univ()
            ->redirect($this->api->url('chapter' . $loop));
        }
    
    }

    /* This Function Made For Automatically Call Given Templates */
    function defaultTemplate(){
        return array('page/chapterIndex');

    }

}	

