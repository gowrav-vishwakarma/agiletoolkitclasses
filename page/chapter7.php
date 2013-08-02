<?php
		/**
												Example of Menu 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Qus. Menu Items ? 
		Ans.	
		
		=================================================================================================
		*/

class page_chapter7 extends Page{
	
	function init(){

		parent::init();

	    $this->add('Class_PagePlay')->play(7);
    

 		/*
			Menu Create and SubMenu
		*/

       /***** break line ******/
        $this->add('HtmlElement')->setHtml('Urls Menus');

		$menu=$this->add('Menu');
         
        $menu->addMenuItem('chapter8','Chapter 8'); // @param ( 'page_name' , 'menu_caption' ) 
        $menu->addMenuItem('chapter9','Chapter 9');
        $menu->addMenuItem('chapter10','Chapter 10');
        $menu->addMenuItem('chapter11','Chapter 11');
        $menu->addMenuItem('chapter12','Chapter 12');
        $menu->addMenuItem('chapter13','Chapter 13');

        
	}
}
