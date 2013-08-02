<?php
		/**
									Example of dynamic sql result & virtual fields  
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================

		=================================================================================================
		*/
class page_chapter14 extends Page{
	function init(){
		parent::init();


       	$this->add('Class_PagePlay')->play(14);

		// $cust=$this->add("Model_Customer")->ref('Project')->ref('Complaints')->dsql()->field('count(*)')->getOne();
		
		$cust=$this->add("Model_Customer");

		
		$cust->addExpression('Count Projects')->set(function($model,$select){
		 return $select->dsql()
		    ->table('project')
		    ->field($select->expr('count(*)'))
		    ->where('customer_id',$select->getField('id'));
		}
		);


		$cust->addExpression('Count Complaints')->set(function($model,$select){
		 return $select->dsql()
		    ->table('complaints')
		    ->field($select->expr('count(*)'))
		    ->where('project_id',$select->getField('id'));	
		}
		);

		// $cust->addExpression('Count Complaints')->set(function($model,$select)use($self){

	 	//      return $this->refComplaints($select->getField('id'))
  		//   	    ->dsql->field($select->expr('count(*)'));


		$this->add("Grid")->setModel($cust)->debug();

		// $cust->LoadAny();

		// echo "No of Customer is :==>>>> <br/>" .  $cust["Clint"];
	



	}
}
	
