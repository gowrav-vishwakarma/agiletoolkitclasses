<?php 

class page_chapter9 extends Page{

	function init(){
		parent::init();

		// Insert Data With Create Own Form ******


		$form = $this->add('Form');
		$form->addField('dropdown','customer','Customer')->setEmptyText("Any Customer")->setModel('Customer');
		$form->addField('line','name','Project');
		$form->addField('line','description','Description');
		$form->addField('line','is_active','is Active');
		$form->addField('line','start_date','Start Date');
		$form->addField('line','progress','Progress');

		$form->addSubmit('Save');
		$form->addReset('Reset');


	}
}