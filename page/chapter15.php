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
class page_chapter15 extends Page {
	function init(){
		parent::init();


		// How to use hasMany() & hasOne Relation in Page or Model ******************
		// Dynamically Entry in Database **************
		

		$no_of_customers=1;
		$no_of_projects=2;
		$no_of_complaints=3;
		$no_of_followups=4;

		$customer=$this->add('Model_Customer');
		$customer['name']='customer 1';
		$customer->save();

		foreach($cust=$this->add('Model_Customer') as $junk){
			for($i=1; $i<=$no_of_projects; $i++){
				$proj=$cust->ref('Project');
				$proj['name'] = "Project $i for " . $cust['name'];
				$proj->save();
			}
		}

		foreach($Project=$this->add('Model_Project') as $junk){
			for($i=1; $i<=$no_of_complaints; $i++){
				$comp=$Project->ref('Complaints');
				$comp['name'] = "Complaints $i for " . $Project['name']. " for " . $Project->ref('customer_id')->get('name');
				$comp->save();
			}
		}

		foreach ($Complaints=$this->add('Model_Complaints') as $junk) {
			for($i=1;$i<=$no_of_followups; $i++){
				$follow=$Complaints->ref('Follows');
				$follow['name'] = "Follow up $i for " . $Complaints['name'] . " for " . $Complaints->ref('project_id')->get('name'). " for " . $Complaints->ref('project_id')->ref('customer_id')->get('name');
				$follow->save();
			}
		}


	}
}
