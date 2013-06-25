<?php

class Model_Follows extends Model_Table{

	var $table='follows';

	function init()
	{

		parent::init();

		$this->hasOne('Complaints','complaints_id');

		$this->addField('name')->caption('Responce')->mandatory('Resoponce Text required !');
		$this->addField('created_at')->defaultValue(date('Y-m-d'))->type('date');

	}
	
}