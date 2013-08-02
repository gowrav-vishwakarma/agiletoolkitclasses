<?php 
		/**
									Example of Save in Model With Programming 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Qus. save data with programming ?
		Ans.	
		=================================================================================================
		*/
class page_chapter30help extends Page{

	function init(){
		parent::init();

		// is required for stickeyGET Viwe_ID *******
		$this->api->stickyGET('view_id');

		// Insert Data With Create Own Form ******
		$form = $this->add('Form');
		$form->addField('dropdown','customer','Customer')->ValidateNotNull('Customer Name Not Selected !')->setEmptyText("Any Customer")->setModel('Customer');
		$form->addField('line','name','Project')->ValidateNotNull('Project Name is Not Empty !');
		$form->addField('line','description','Description')->addComment("Enter Only Description ")->setAttr("maxlength",10);
		$form->addField('radio','is_active','is Active')->setValueList(array("1"=>"true","0"=>"false"));
		$form->addField('datePicker','start_date','Start Date');
		$btn=$form->addField('slider','progress','Progress')->setLabels("0","100")->setRange(0,100);
		

		$form->addSubmit('Save');		// $form->addReset('Reset');



		$m=$this->add('Model_Project');
			
		$form->onSubmit(function($form)use($m){	
						
			$m['customer_id']=$form->get('customer');
			$m['name']=$form->get('name');
			$m['description']=$form->get('description');
			$m['is_active']=$form->get('is_active');
			$m['progress']=$form->get('progress');
			$m['start_date']=$form->get('start_date');

			$m->save();

			// required for refreshing form particular part ***********
			$form->js(null, $form->js()->_selector('#'.$_GET['view_id'])->trigger('reload_me'))->univ()->closeDialog()->execute();

		});

	}
}