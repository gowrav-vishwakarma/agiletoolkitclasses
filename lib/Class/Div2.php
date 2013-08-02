<?php
class Class_Div2 extends HtmlElement{

	function init(){
		
		parent::init();

		$this->setElement('div');
		$this->setHtml('This is my second Class2 (lib/Class/Div2.php) : ' .rand(1000,9000) . '<br>');
		
	}

}