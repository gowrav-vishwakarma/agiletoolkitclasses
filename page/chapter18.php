<?php
		/**
							Example of Update Records Dynamacally Use With Model Feature  
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		=================================================================================================
		*/
class page_chapter18 extends Page{
	function init(){
		parent::init();

       	$this->add('Class_PagePlay')->play(18);

		// Update Records Dynamacally Use With Model Feature **************
		// ****************************************************************
	
	/****
	
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
	
	****/

        $this->add('View')->setHtml('<a href="?page=chapter18"> See Source Code Page: Chapter18.php </a> ');
	}
}