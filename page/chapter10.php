<?php
		/**
		    						Example of Mannually Searching in Model 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Qus. 
		Ans.	
		
		=================================================================================================
		*/
class page_chapter10 extends Page {
	function init(){
		parent::init();

	    $this->add('Class_PagePlay')->play(10);

		$form = $this->add('Form');
		$form->addField('dropdown','project','Project')->setEmptyText("Any Project")->setModel('Project');
		$form->addField('line','name','complaint');
		$form->addField('line','money','cost');
		$form->addField('radio','is_solved')->setValueList(array('1'=>'true','0'=>'false'));
		$form->addField('checkbox','is_paid');
		$form->addSubmit('Filter');		


		$model_complaint=$this->add('Model_Complaints');

		if($_GET['is_grid'])
		{

			$this->api->stickyGET('is_grid');
			$this->api->stickyGET('complain');
			$this->api->stickyGET('money');
			$this->api->stickyGET('is_solved');
			$this->api->stickyGET('is_paid');
			$this->api->stickyGET('project');

			if($_GET['complain']) $model_complaint->addCondition('name','like','%'.$_GET['complain'].'%');
			
			if($_GET['money']) $model_complaint->addCondition('cost','like','%'.$_GET['money'].'%');
			
			if($_GET['is_solved'])				// throw new Exception("Error Processing Request", $_GET['is_solved']);
				$model_complaint->addCondition('is_solved',$_GET['is_solved']);
			
			if($_GET['is_paid']) $model_complaint->addCondition('is_paid',$_GET['is_paid']);
			
			if($_GET['project']) $model_complaint->addCondition('project_id',$_GET['project']);
		}


		$grid=$this->add('Grid');

		$grid->add('View_Info',null,'top_1')->set('Total Record : ' . $model_complaint->count());

		$grid->setModel($model_complaint);

		$grid->addQuickSearch(array('cost'));
		$grid->addPaginator(2);

		if($form->isSubmitted()){
				$grid->js()->reload(array('is_grid'=>1,
								'complain'=>$form->get('name'),
								'money'=>$form->get('money'),
								'is_solved'=>$form->get('is_solved'),
								'is_paid'=>$form->get('is_paid'),
								'project'=>$form->get('project')))
							->execute();

		}
		
	}
}