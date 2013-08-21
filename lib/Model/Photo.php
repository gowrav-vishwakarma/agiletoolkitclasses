<?php
/*
remember this : 
Create a Thumb Image ***
code valid only for before uploade image code ***  

	$_SESSION['image_size']='x,y';
example :
	$_SESSION['image_size']='110,110';
*/

class Model_Photo extends Model_Table{

	var $table='filestore_file';

	function init()
	{
		parent::init();

		$this->addField('filename');
		$this->addField('original_filename');
	
	}

	
	function pic($photo_id)
	{
		$this->tryLoad($photo_id);

		if($this->loaded()){
			
        	$path = "upload/" . $this['filename'];
        	return $path;
		}else{
			return false;
		}
  	} 	

	function pic_thumb($photo_id)
	{
		$this->tryLoad(($photo_id-1));

		if($this->loaded()){
			
        	$path = "upload/" . $this['filename'];
        	return $path;
		}else{
			return false;
		}
  	}



}