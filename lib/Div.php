<?php

class Div extends HtmlElement{
	function init(){
		parent::init();

		
		$this->setElement('div');
		$this->setHtml('This is my first Class1 : ' .rand(1000,9000) . '<br>');



	}

}