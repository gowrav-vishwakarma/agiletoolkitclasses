<?php
		/**
												Example of Menu 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Qus. 
		Ans.	
		
		=================================================================================================
		*/

class page_chapter7 extends Page{
	
	function init(){

		parent::init();

        $this->add('H1')->set('Create Your Own Menu');
        
        $btn2=$this->add('Button')->setLabel('Next Chapter8');
        $btn2->js('click')->univ()->redirect($this->api->url('chapter8'));

		/*
			Menu Create and SubMenu
		*/
		$menu=$this->add('Menu');
         
        $menu->addMenuItem('chapter8','Chapter 8'); // @param ( 'page_name' , 'menu_caption' ) 
        $menu->addMenuItem('chapter9','Chapter 9');
        $menu->addMenuItem('chapter10','Chapter 10');
        $menu->addMenuItem('chapter11','Chapter 11');
        $menu->addMenuItem('chapter12','Chapter 12');
        $menu->addMenuItem('chapter13','Chapter 13');

        
	}
}
