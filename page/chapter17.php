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
class page_chapter17 extends Page {
    function init(){
        parent::init();
       

       	// add Tabs with CRUD From Model **************************
        
        $tab=$this->add('Tabs');
        $tab->addTab('Customer')->add('CRUD')->setModel('Model_Customer');
        $tab->addTab('Project')->add('CRUD')->setModel('Model_Project');
        $tab->addTab('Complaints')->add('CRUD')->setModel('Model_Complaints');
        $tab->addTab('Follows')->add('CRUD')->setModel('Model_Follows');

        // $this->add('CRUD')->setModel('Model_Follows');

        
        // Creating Model Objects **************************

        $model_customer=$this->add('Model_Customer');
		$model_project=$this->add('Model_Project');
		$model_complaints=$this->add('Model_Complaints');
		$model_follow=$this->add('Model_Follows');

    	// foreach($model_customer as $x)
    	// {
    	// 	echo $x["name"];
    	// }


		// Dynamically Record Entry *************************************
		// Get Save On Each Record 
		// Retrive Data Currently Saved Record & Sent to Next Loop  ***********
		//*****************************************************************************

		
		//*********** Record No Var ***************
		//*****************************************
		$entry_record_customer=4;
		$entry_record_project=2;
		$entry_record_complaints=3;
		$entry_record_follows=4;



		//*********** Customer Loop ***************
		//*****************************************

		for($cust=1;$cust<=$entry_record_customer;$cust++)
		{

			$model_customer['name']='Name ' . $cust;
			$model_customer->save();
			$new_cust_id=$model_customer->id;


		//*********** Project Loop ***************
		//*****************************************
			for($pro=1;$pro<=$entry_record_project;$pro++)
			{

				$model_project['name']='Project ' . $pro;
				$model_project['customer_id']=$new_cust_id;
				$model_project->save();
				$new_pro_id=$model_project->id;


		//*********** Compliment Loop ***************
		//*****************************************
				for($comp=1;$comp<=$entry_record_complaints;$comp++)
				{

					$model_complaints['name']='Complaints ' . $comp;
					$model_complaints['project_id']=$new_pro_id;
					$model_complaints->save();
					$new_comp_id=$model_complaints->id;



		//*********** Follow Up Loop ***************
		//*****************************************
					for($follow=1;$follow<=$entry_record_follows;$follow++)
					{

						$model_follow['name']='Follow ' . $follow;
						$model_follow['complaints_id']=$new_comp_id;
						$model_follow->save();
						// $new_follow_id=$model_follow->id;

					
					}
				}		
			}
		}





    }
}
