<?php
	/**
						     	  		  Example of Show Thumb Image 
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
      add Model File /Model/Photo.php
    =================================================================================================
	*/

class page_chapter41 extends Page {

	function init(){
		parent::init();

		$this->add('Class_PagePlay')->play(41,null,true,true,null,'cheatsheet');

    /***** Load Model *****/
		//$m=$this->add('Model_Customer')->addCondition('id',1)->load(1);
    $m=$this->add('Model_Customer')
      ->addCondition('id','200')
      ->load('200')
      ;

    /***** Welcome Detail *****/
    $this->add('H3')->set('Welcome User : ' . $m['name'] . ' - ID is : ' . $m['id']);

    
    if($m['customer_photo_id']){
       
        /***** Print/View Images *****/
        $img=$this->add('HtmlElement')
          ->setElement('img')
          ->setAttr('src',$m['customer_photo'])
          ->setAttr('height',190)
          ->setAttr('width',200)
          ;
        
        /***** Print/View Images *****/
        $img1=$this->add('HtmlElement')
          ->setElement('img')
          ->setAttr('src',$this->add('Model_Photo')->pic($m['customer_photo_id']))
          ;
          

        $img2= $this->add('HtmlElement')
          ->setElement('img')
          ->setAttr('src',$this->add('Model_Photo')->pic_thumb($m['customer_photo_id']))
        ;    
    }else{
      $this->add('View')->set('Image Not Found !');
    }

      $_SESSION['image_size']='200,200';

      /***** Add Form *****/   
      $form=$this->add('Form');
      $form->setModel($m,array('customer_photo_id'));
      $form->addSubmit('Submit');

      if($form->isSubmitted()){
          $form->update();
          $this->js(true,
            array(
              $img->js(true)->reload(),
              $img1->js(true)->reload(),
              $img2->js(true)->reload()
              ))->univ()->successMessage('Image Successfully Updated !')->execute();
      }
    
    }      

}