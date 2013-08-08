<?php
	/**
						     	  		  Example of Upload Image
										'********************************'
								Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
		*//*
		=================================================================================================
		
    ********** ********** **********
    Required :  atk4-addons/filestore/lib/Model/File.php
    Function : Over Write

        function beforeDelete(){

          // change permission  
          chmod($this->getPath(), 0777);
          unlink($this->getPath());
        }
    ********** ********** **********

    Note: field add in Model "customer" photo_id

		Create Table 4. folder->/sql/chapter40.sql import in database

CREATE TABLE IF NOT EXISTS `filestore_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filestore_type_id` int(11) NOT NULL DEFAULT '0',
  `filestore_volume_id` int(11) NOT NULL DEFAULT '0',
  `filename` varchar(255) NOT NULL DEFAULT '',
  `original_filename` varchar(255) DEFAULT NULL,
  `filesize` int(11) NOT NULL DEFAULT '0',
  `filenum` int(11) NOT NULL DEFAULT '0',
  `deleted` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

CREATE TABLE IF NOT EXISTS `filestore_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `original_file_id` int(11) NOT NULL DEFAULT '0',
  `thumb_file_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

CREATE TABLE IF NOT EXISTS `filestore_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `mime_type` varchar(64) NOT NULL DEFAULT '',
  `extension` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;


INSERT INTO `filestore_type` (`id`, `name`, `mime_type`, `extension`) VALUES
(1, 'png', 'image/png', 'png'),
(2, 'jpeg', 'image/jpeg', 'jpeg'),
(3, 'gif', 'image/gif', 'gif'),
(4, 'jpg', 'image/jpg', 'jpg');


CREATE TABLE IF NOT EXISTS `filestore_volume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `dirname` varchar(255) NOT NULL DEFAULT '',
  `total_space` bigint(20) NOT NULL DEFAULT '0',
  `used_space` bigint(20) NOT NULL DEFAULT '0',
  `stored_files_cnt` int(11) NOT NULL DEFAULT '0',
  `enabled` enum('Y','N') DEFAULT 'Y',
  `last_filenum` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


INSERT INTO `filestore_volume` (`id`, `name`, `dirname`, `total_space`, `used_space`, `stored_files_cnt`, `enabled`, `last_filenum`) VALUES
(1, 'upload', 'upload', 1000000000, 0, 52, 'Y', NULL);

	=================================================================================================
	*/

class page_chapter40 extends Page {

	function init(){
		parent::init();

		$this->add('Class_PagePlay')->play(40);

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
          // ->setAttr('height',400)
          // ->setAttr('width',400)
          ;
    }else{
      $this->add('View')->set('Image Not Found !');
    }
   
      /***** Add Form *****/   
      $form=$this->add('Form');
      $form->setModel($m,array('customer_photo_id'));
      $form->addSubmit('Submit');

      if($form->isSubmitted()){
       
          $form->update();
          $this->js(true,$img->js(true)->reload())->univ()->successMessage('Image Successfully Updated !')->execute();
    
      }
    
    }      

}