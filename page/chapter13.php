<?php
		/**
										 Example of sqlExpresion in Grid 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================

		=================================================================================================
		*/
class page_chapter13 extends Page {
	function init(){
		parent::init();

    
      	$this->add('Class_PagePlay')->play(13);
	
		//Example of SqlExpression in Grid View **************************

		$project = $this->add('Model_Project');
		
		// $project->ref('customer_id')->get('name');
		// $this->add('View')->set("Total Number Of Customers " .$customer->count());


		$project->addExpression('customer_name')->set(function($m,$q){
			 return $m->refSQL('customer_id')->fieldQuery('name');
		});
		
		 $project->addExpression('solved_Complain')->set(function($m,$q){
			 return $q->dsql()
		    ->table('complaints')
		    
		    ->field($q->expr('count(*)'))
		    ->where('project_id',$q->getField('id'))
		    ->where('is_solved',true);
		
		});
		 $project->addExpression('unsolved_Complain')->set(function($m,$q){
			 return $q->dsql()
		    ->table('complaints')
		    ->field($q->expr('count(*)'))
		    ->where('project_id',$q->getField('id'))
		    ->where('is_solved',false);
		
		});
		 $project->addExpression('paid_Complain')->set(function($m,$q){
			 return $q->dsql()
		    ->table('complaints')
		    ->field($q->expr('count(*)'))
		    ->where('project_id',$q->getField('id'))
		    ->where('is_paid',true);
		
		});
		 $project->addExpression('unpaid_Complain')->set(function($m,$q){
			 return $q->dsql()
		    ->table('complaints')
		    ->field($q->expr('count(*)'))
		    ->where('project_id',$q->getField('id'))
		    ->where('is_paid',false);
		
		});
	

		//$customer->addExpression('complaints_count')->set(function($m,$q){
		//	return $m->refSQL('Project')->refSQL('Complaints')->count();
		//});

		$grid=$this->add('Grid');
		
		//Load Model & Field Select in Database 
		$grid->setModel($project,
			array('name','customer_name','solved_Complain','unsolved_Complain','paid_Complain','unpaid_Complain')
			);

	}
}