<?php
		/**
												Example of Model 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		Qus. how to create own model & use ? 
		Ans. 	

			create Model on "lib/Model/Model_Name.php" model structure Given That
			create 4 tables Model "Customer->Project->Complaints->Follows"
		
		=================================================================================================
		*/

class page_chapter8 extends Page{

	function init(){

		parent::init();

		$this->add('H1')->set('Create Model "lib/Model/Model_Name.php"');
        
        $btn2=$this->add('Button')->setLabel('Next Chapter9');
        $btn2->js('click')->univ()->redirect($this->api->url('chapter9'));
	
	
		/***** create model object ******/
		$model = $this->add('Model_Customer');

		
		/***** read customer Name Method ******/

		foreach($model as $junk){
			echo "****** <br>";
			echo $junk["id"] . "<br>";
			echo $junk["name"] . "<br> ";
		}

		/***** read customer Name Method 2 *****/

		/***** get record where id='2' *****/
		$model->load(2); 

		/***** load any one row if exists data in table ******/
		$model->loadAny(); 
		
		/***** if can't find data it will be not throw exception *****/
		$model->tryLoad(5); 

		/***** if can't find data it will be not throw exception *****/
		$model->tryLoadAny(); 

		/***** search on field if record not found throw exception *****/
		// $model->loadBy('name','like','rahul');

		/***** search on field without exception *****/
		// $model->tryLoadBy('name','like','%a%'); 
		
		/***** return current rows *****/
		// $model->getRows(0);
		
		/***** get "id" field value *****/
		// echo $model['name'];
		
		/***** delete particular id row data @param: Row_ID *****/
		// $model->delete($row); 

		/***** delete all of current model *****/
		// $model->deleteAll;

		/***** setLimit @Param $a=10 Records *****/
		// $model->setLimit($a,$b=null);

		/***** setLimit @Param $a=10 Records *****/
		// $model->setOrder('name','Desc');

		/***** model loaded() *****/
		// if($model->loaded()){
		// 	echo "kuch aaya hai";
		// }else{
		// 	echo "kuch nahi aaya";
		// }

	    /** Forget loaded data */
	    // $model->unload() 
	    // $model->reset()


		/***** add CRUD With some ristriction *****/
		$crud=$this->add('CRUD',
			array('allow_add'=>false,'allow_edit'=>false,'allow_del'=>false)
			);

		/***** setModel in CRUD *****/
		$crud->setModel(
			$model,							/***** Set Model Objectes *****/
			null,							/***** Select Form Fields *****/
			array('id','name','address','is_active') /***** Select Grid Fields *****/
			);
		


		// $crud->addFrame('id');

		$crud->addFrame('Frame',array('view_class'=>'Grid'));

		$crud2=$crud->addRef(
			'Project', 						/***** automatically add expander Project(Model) *****/
			array('view_class'=>'Grid')
			);

		/***** mannually add crud expander ******/
		if(!$crud->isEditing()){

			/***** $param: ( expander , page_name , button_caption ) *****/
    		$crud->grid->addColumn('expander','msgs',"Message");
    	}

	}

	function page_msgs(){
		/***** that page show prpoerly 
			reqired init() change into -> page_index()  
			comment // parent::init() line  
		******/
		$this->add('View_Info')->set('Click id is : ' . $_GET['customer_id']);
	}

}
