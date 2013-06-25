<?php

class Div extends HtmlElement{
	function init(){
		parent::init();

		$this->setElement('div');
		$this->set(rand(1000,9000));
	}

}