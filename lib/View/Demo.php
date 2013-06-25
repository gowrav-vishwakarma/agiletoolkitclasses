<?php

class View_Demo extends View {
	
	function init(){
		parent::init();

			$this->memorize($this->name.'count',$this->recall($this->name.'count',0)+1);
			$this->add('View_Info')->set($this->recall($this->name.'count',"Not Available"));
			$this->js('click')->reload();
	}


}