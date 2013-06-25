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
class page_chapter18 extends Page{
	function init(){
		parent::init();



		// Update Records Dynamacally Use With Model Feature **************
		// ****************************************************************

		$proj=$this->add('Model_Project');
		$proj->addCondition('name','like','%2%');

		foreach($proj as $i)
		{

			$comp1=$proj->ref('Complaints');
			$i=1;
			foreach($comp1 as $c){
				if($i==1) $comp1['is_solved']=true;
				if($i==2) {
					$comp1['is_solved']=true;
					$comp1['is_paid']=true;
				}

				$comp1->save();
				$i++;
				if($i==3) break;
			}		
		}
	}
}