<?php

class Model_Complaints extends Model_Table{

	var $table='complaints';

	function init()
	{

		parent::init();

		$this->hasOne('Project','project_id');

		$this->addField('name')->caption('Complaint')->mandatory('Complaint is required !');
		$this->addField('cost')->type('money');
		$this->addField('is_solved')->type('boolean')->defaultValue(false);
		$this->addField('is_paid')->type('boolean')->defaultValue(false) ;
		$this->addField('created_at')->type('date')->defaultValue(date('Y-m-d'));

		$this->hasMany('Follows','complaints_id');

	}
	
}