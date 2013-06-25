<?php

class Model_Project extends Model_Table{

	var $table='project';

	function init()
	{

		parent::init();

		// Project Model Mai Customer Model Ka Ek Hi Field Hai ****************
		$this->hasOne('Customer','customer_id');

		/** $this->addField('name')
				->caption('Project')
				->mandatory("Project Name is required !")
				->type('password')               // password / boolean / int / date / time 
				->display(
					array('form'=>'text','grid'=>'grid/inline')
					) 
			;
		**/

		$this->addField('name')->caption('Project')->mandatory("Project Name is required !");
		$this->addField('description');
		$this->addField('is_active')->type('boolean')->defaultValue(true);
		$this->addField('start_date')->type('date')->defaultValue(date('Y-m-d'));
		$this->addField('progress')->type('int');

		 $this->hasMany('Complaints','project_id');

	}
	
}