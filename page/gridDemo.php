<?php

class page_gridDemo extends Page{
	
	function init(){
		parent::init();


		$crud=$this->add('CRUD');
		$crud->setModel('Model_Project');

		if($crud->grid){
  			  	$crud->grid->addPaginator(10);
    			$crud->grid->getColumn('name')->makeSortable();
    			$crud->grid->getColumn('progress')->makeSortable();
		}


		$crud->grid->addQuickSearch(array('name','cost'));

		$crud->grid->dq->field('description');

		$action_form=$crud->add('Form',null,null,array('form_empty'));
		  
		  $ids=$action_form->addField('line','ids');
		  
		  $crud->grid->addSelectable($ids);
		  
		  $action_form->addSubmit('Delete Selected');
		  $action_form->onSubmit(function($f) use ($crud){
		      $ids=json_decode($f->get('ids'));
		      $m=$crud->grid->getModel()->dsql(null,false)->where('id in',$ids);//->do_delete();
		      return $f->js(null,$crud->grid->js()->reload())
          		->univ()->successMessage('Success');
  			});
	}
}