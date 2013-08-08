<?php

class Model_Customer extends Model_Table {

	/***** table_name *****/
	var $table='customer';

	/***** id_field name if your primary key fieldName is not "id" *****/
    // public $id_field='id';   

	/***** name_fieldName if your primary key fieldName is default get by id *****/
    // public $title_field='name';
	
	/***** table alias name *****/
    // public $table_alias='name';

	function init()
	{

		parent::init();

		/***** addField name *****/
		$this->addField('name')->mandatory('Customer name is required !');
		$this->addField('address');
		$this->addField('email');
		$this->addField('mobile')->type('int');
		$this->addField('dob')->type('date')->defaultValue(date('Y-m-d'));
		$this->addField('is_active')->type('boolean')->defaultValue(true);

		//$this->add('filestore/Field_Image','photo_id')->type('image');
		$this->add("filestore/Field_Image","customer_photo_id")->type('image');

		/***** 
			$this->addField('field_name')

				->type('data_type')
						* int
						* boolean
						* date
						* time
						 


		
		*****/

	
		/*
			Project Model Mai Bahut Sare Customer id Hai is Liye Has Many 
			Project Model Mai Ja Ke Dekho
		*/

		$this->hasMany('Project','customer_id');

	}
	
}