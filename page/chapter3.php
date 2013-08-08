<?php
        /**
                                                Example of Button 
                                        '********************************'
                                Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
        *//*
        =================================================================================================
        Qus. What is Button and its Use?
        Ans. 

        =================================================================================================
        */
class page_chapter3 extends Page {
    function init(){
        parent::init();

        $this->add('Class_PagePlay')->play(3);

        /*======================================
                Example 0 
        =======================================*/

        /***** Button Goto Url ******/
        $btn_hide=$this->add('Button')
            ->setLabel('Next Chapter-4') // this is same as set() ***
       
            ->js('click') // on click event 
            ->univ()->redirect($this->api->url('chapter4')) // this function same working as $btn->redirect($page_name)
            ->successMessage('Tab has been hidden successfully')
            ;//->execute();
        
        /*======================================
                Example 1 
        =======================================*/

        /***** break line ******/
        $this->add('HtmlElement')->setHtml('</br>');
        
    	/***** Button Click Me ******/
        $btn=$this->add('Button');
        $btn->set('Click Me & Success Message') // its a button caption
            ->js('click') // on click event 
            ->univ()
            ->successMessage('Successfull Clicked : ' . rand(1000,99999))
            ;//->execute();


        /***** </br> ******/
        $this->add('View')->setHtml('</br>');

            
        /***** add tabs 3 tab ******/
    	$tab=$this->add('Tabs');
    	
    	$tab_opt1=$tab->addTab('Button Example 1');
    	$tab_opt2=$tab->addTab('Button Example 2');
    	$tab_opt3=$tab->addTab('Button Example 3');

        /***** </br> ******/
        $this->add('View')->setHtml('</br>');


        /*======================================
                Example 2 
        =======================================*/

        /***** Button Hide Tab ******/
        $btn_hide=$this->add('Button')
            ->setLabel('Hide Tabs') // this is same as set() ***
            // ->setIcon($Icon) // set name Icon ***
            ->js('click', $tab->js()->hide() ) // on click event 
            ->univ()
            ->successMessage('Tab has been hidden successfully')
            ;//->execute();

        /*======================================
                Example 3 
        =======================================*/

        /***** Button Show Tab ******/
        $btn_show=$this->add('Button')
            ->set('Show Tab') 
            ->js('click' , $tab->js()->show()) // on click event 
            ->univ()
            ->successMessage('tab has been visibal')
            ;//->execute();


        /*======================================
                Example 4 
        =======================================*/

        /***** concept of reload object ******/
        
        /***** add blank view object ******/
        $v=$tab_opt1->add('View')->set('');

        /***** check if value exist or not *****/ 
        if($_GET['Demo_Msg']) $v->set('Hellow Hi Friends ! ' . rand(1000,9999));

        /***** button add in tab1 and create object *****/ 
        $btn_demo_msg = $tab_opt1->add('Button')->set('Says Hi !');

        /****** after button click send value of "Demo_Msg" wiya $_GET[""] method ******/
        $btn_demo_msg
            ->js('click',
                    $v->js()->reload(array('Demo_Msg'=>1))
                );

        /*======================================
                Example 5 
        =======================================*/

        /***** Show Random Number ******/       
        /***** Button add in tab2 with object *****/
        $btn_demo_random = $tab_opt2->add('Button')->set('Click Me for Random Number');

        /***** Get value on send by javascript *****/
        if($_GET['Demo_Random']) $btn_demo_random->set('Random Noumber is :' . rand(1000,9999));

        /****** Send Value ******/
        $btn_demo_random->onClick(function($btn){

            $btn->
                js('click')
                ->reload(array('Demo_Random'=>1))
                // ->univ->errorMessage("Number Refreshed ! Done")
                ->execute(); /* ====== that will be used in only function =======*/
        
        });
        
        /*======================================
                Example 6 
        =======================================*/

        /*
            another way to show random number on same button object
        */
        // $btn_demo_msg->js('click',$btn_demo_msg->js()->reload(array('Demo_Random'=>1)));


        /*======================================
                Example 7
        =======================================*/

        /***** Load loremIpsum (Random Generated Words ) ******/       
        $v=$tab_opt3->add('View')->set('');
        
        /***** Get value on send by javascript *****/
        if($_GET['Demo_LoremIpsum']) $lorem=$v->add('LoremIpsum')->setLength(3,60);
       
        /***** Button add in tab3 with object *****/
        $btn_demo_loremIpsum=$tab_opt3->add('Button')->set('LoremIpsum Refresh');
       
        /***** if button isClicked reload view *****/
        if($btn_demo_loremIpsum->isClicked())
            $btn_demo_loremIpsum
                        ->js('click',$v->js()->reload(array('Demo_LoremIpsum'=>1)))
                        ->execute(); /* ====== that will be used in only function =======*/



        

	}
}	