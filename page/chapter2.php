<?php
        /**
                                                Example of Tabs 
                                        '********************************'
                                Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
        *//*
        =================================================================================================
        Qus. how to show tabs in our page ?
        Ans.    
                its a sub class of view & extends view class
                that all function run on *JUItabs.php 
        =================================================================================================
        */
class page_chapter2 extends Page {
    function init(){
        parent::init();
    
        $this->add('Class_PagePlay')->play(2);

        /***** add tab on page with object *****/
    	$tab = $this->add('Tabs');
    	
        /***** addTab function ******/
    	$tab_opt1=$tab->addTab('Home 1');
    	$tab_opt2=$tab->addTab('Home 2');
    	$tab_opt3=$tab->addTab('Home 3');
    	$tab_opt4=$tab->addTab('Home 4');
    	$tab_opt5=$tab->addTab('Home 5');
    	$tab_opt6=$tab->addTab('Home 6');
    	$tab_opt7=$tab->addTab('Home 7');
        //->setOption('selected',"zero-based index of tab");

    	/***** addTabURL function ******/
        $tab_opt8=$tab->addTabURL('chapter3','tabURL goto Chapter3.php');



    	/***** Heading Tag *****/
    	$tab_opt1->add('H1')->set('Hellow Swastik E-Tech');

    	/***** Create Views ******/
    	$tab_opt2->add('View')->setHtml('Hellow </br> Swastik E-Tech ! <strong> View </strong> ');
	
		/****** Create Views_Info *******/
    	$tab_opt3->add('View_Info')->set('Hellow Swastik E-Tech ! View')->addClose();
	
		/****** Create Views_Info ******/
    	$tab_opt4->add('View_Error')->set('Hellow Swastik E-Tech ! View')->addClose();//->addIcon();
	
		/****** Create Views_Info ******/
    	$tab_opt5->add('View_Hint')->set('Hellow Swastik E-Tech ! View');
	
		/****** Create Views_Info *****/
    	$tab_opt6->add('View_Warning')->set('Hellow Swastik E-Tech ! View');
	


    	/***** HTML part Run ******/
		$tab_opt7->add('HtmlElement')->setElement('Div')->setStyle('color', 'red')->setStyle('background-color','yellow')->set('Swastik E-Tech');

     	/* Its a Page Functions 
		
        $this->getTitle();
		$this->recursiveRender();
        
        */

        // $this->add('View_Demo');
        // $this->add('View_Demo');
        // $this->add('View_Demo');


    

	}
}	