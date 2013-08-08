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
class page_chapter1 extends Page {
    function init(){
        parent::init();

        $this->add('Class_PagePlay')->play(1,null,true,true,'chapterIndex');

        /****** Normal View  *****/
        $this->add('View');
        
        /***** view class function ******/
        $this->add('View')->set('Hello World');

        /***** view class function ******/
        $this->add('View')->setText('Hello World'); /***** Same as Set()*****/

        /***** view class function  ******/
        $this->add('View')->setElement('Div')->set('Hello World'); /***** default use div tag / set any html tag*****/

        /***** view class function  ******/
        $this->add('View')
            ->setElement('Div')
            ->set('Hello World')
            ->setStyle('color', 'red') /***** Style Colour Red ******/
            ->setStyle('background-color','yellow')
            ;

        /***** view class function  ******/
        $this->add('View')
            ->setHtml('Hello &nbsp;&nbsp;&nbsp; <a href="#" >World</a>'); /***** set any html tag*****/


        /*=======================================
                Who Extends Sub Class Box 
        =========================================*/    

        /****** View_Warning Box ******/        
        $this->add('View_Warning')
            ->set('Warning: smoking injurious to health ')
            ->addClose()        /***** add close button automatically *****/
            // ->addIcon(null)     /***** add incom @param Icon file name *****/
            ;

        /****** View_Info Box ******/        
        $this->add('View_Info')
            ->set('Information : agile toolkit much better than other php framwork ')
            ->addClose()        /***** add close button automatically *****/
            // ->addIcon(null)     /***** add incom @param Icon file name *****/
            ;

        /****** View_Error Box ******/        
        $this->add('View_Error')
            ->set('Error: system has been hacked ')
            ->addClose()        /***** add close button automatically *****/
            // ->addIcon(null)     /***** add incom @param Icon file name *****/
            ;

        /****** View_Hint Box ******/        
        $this->add('View_Hint')
            ->set('Hint: india capital is delhi.')
            ->addClose()        /***** add close button automatically *****/
            // ->addIcon(null)     /***** add incom @param Icon file name *****/
            ;
        
        /****** View_Demo ******/
        $this->add('View')->setHtml('</br>Demo : Click and increment the number ');        
        $this->add('View_Demo');



        /*======================================
                    Sub Class Button 
        =======================================*/
        
        $this->add('Button')
                // ->set('Sample Button')
                ->setLabel('Sample Button') /***** Same as set *****/
                // ->setIcon($Icon,$Color) /***** Set Icon On Button *****/
                // ->jsButton() 
                ->redirect('chapter1') /***** @param (page_name) call as same page *****/
                // ->submitForm($form) /***** @param (form_obj) which do u submitted. same like as button->js("click",$form->js()->submit()); *****/
                ;
        /*
        Button have 2 handler method 
        1. $btn->isClicked($confirm=null) 
            its return only boolean value. on button click or not. 
            example: 

            if($btn->isClicked()){
                #Code after click
            }
        2. $btn->onClick($callback,$confirm=null)
            this method same as isClicked().
            extra feature : $callback replace as a function. 
            
            example:
            if($btn->onClick(
                function($btn) use($form){
                    
                }
                ))

        ********************************************************
            Button More Example Given in @link: Chapter3.php
        ********************************************************
         */        
        
        
        /*======================================
                    Sub Class ButtonSet 
        =======================================*/
        /*
            ButtonSet same as obj->add('Button')->set($caption);  
            more example in chapter3.php
        */
        $btn_obj=$this->add('View_ButtonSet');
        $btn_obj->addButton('ButtonSet');    

        
        /*======================================
                    Sub Class CRUD  
        =======================================*/
        /*
            CRUD : Create / Retrive / Update / Delete
            extends View Class 
            example @link: chapter10.php
        */
        $this->add('CRUD')
            ->setModel('Model_Customer');    

        
        
        /*======================================
                    Sub Class Columns  
        =======================================*/
        /***** example @link: chapter4.php *****/
        $cols=$this->add('Columns');
        $cols->addColumn(4)->add('LoremIpsum')->setLength(2,20);
        $cols->addColumn(6)->add('LoremIpsum')->setLength(2,20);
        $cols->addColumn(2)->add('LoremIpsum')->setLength(2,20);
        

        /*======================================
                Sub Class DropButton  
        =======================================*/
        $drop_btn=$this->add('View_DropButton')->set('Drop Down Button');    
        // $drop_btn->add('d');

        /*======================================
                Sub Class HtmlElement  
        =======================================*/
        /*
            it will be use for same as print html tags.
        */
        $this->add('View')->setHtml('</br>');    
        $drop_btn=$this->add('HtmlElement')->setElement("<p><strong>slkkjdfhd </strong>skjdfghfg kjhdfg kjj</p>");    


        /*======================================
                Sub Class Tabs  
        =======================================*/
        /*
            tab view 

            See Page @link: chapter2.php
        */
        $tab=$this->add('Tabs');
        $tab->addTab('Tab 1')->set("this is my tab 1");
        $tab->addTab('Tab 2')->set("this is my tab 2");


	}
}	