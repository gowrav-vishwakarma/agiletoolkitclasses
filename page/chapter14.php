<?php
		/**
												Example of View 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Qus. We will need all customer list on DropDown box and after Select DropDown Record We Will Get 
			All projects of selected customer in a special view ?
		Ans.	
			Create 2 View its required ******** 
			    lib/View/*.php
			1.View_ProjectList.php 
			2.Project.php
		create 1 template 
			templete/default/view/project.html
		=================================================================================================
		*/
class page_chapter14 extends Page{
	function init(){
		parent::init();

		

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
	
