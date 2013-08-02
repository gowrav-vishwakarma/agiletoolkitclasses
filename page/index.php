<?php
/**
                                            Agile toolkit Index Page 
                                        '********************************'
                                Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
        *//*
        =================================================================================================
        Step.1 => download agile toolkit latest version / sublime editor / lump apche / ubunto OS / mySql workbench
        		etc ...

        Step.2 => config index.php file 
        		include 'atk4/loader.php';
				$api=new Frontend('agileLearn');  /***** given name to your own unique api *****
				$api->main();
		
		Step.3 => config lib/Frontend.php
				@1. $this->dbConnect(); /****** UnComment for run database connection to all pages 
				@2.     $this->add('BasicAuth')
				            ->allow('demo','demo')
            			// use check() and allowPage for white-list based auth checking
            			//->check()
            			;
				@3.         $this->add('Menu',null,'Menu')   // Front Menu Option Given By Agile ToolKit
				            ->addMenuItem('index','Welcome') // @parm ( page_name , menu_lable )  
            				->addMenuItem('logout','Logout')
        				     ;
				Each Page Have Two Functions 

				// $this->getTitle();
				// $this->recursiveRender();

		Step.4 => Namining Convection
				FolderName_SubFolderName_ClassName
	        =================================================================================================
       	*/
			/** 
			add( 'item_Name' , 'Item_Class_Property' , 'Item_Template_Spot' , 'Item_Template_Path' ) 
			**/ 

class page_index extends Page{
	function init(){
		parent::init();

		/***** add H1 for title *****/

		$this->add('H1')->setHtml('Xavoc International <=> Swastik E-Tech');

		/***** creater profile *****/			
		$this->add('View')->setHtml('Created by : Rahul Vishnoi <a href="mailto:cool_vishnoi@yahoo.co.in">cool_vishnoi@yahoo.co.in</a>');	

		/***** Move on Next Page *****/			
        $btnNext=$this->add('Button')->setLabel('Next : Agile Configration');
        $btnNext->js('click')->univ()->redirect($this->api->url('configration'));

        /***** break line ******/
        $this->add('HtmlElement')->setHtml('</br>');

		/***** blanck view object*****/			
		$v=$this->add('View')->set('');

		/***** get & check value by js() and print hellow world *****/			
        if($_GET['Demo']) $msg=$v->add('View_Info')->set('hellow world : ' . rand(10,999))->addClose()->addIcon(null);

		/***** add Button with caption *****/			
        $btn_demo=$this->add('Button')->set('Demo Hello World');

		/***** button ckick run java script sent value and show popup message *****/			
        $btn_demo->js('click',$v->js()->reload(array('Demo'=>1)));



	}
}