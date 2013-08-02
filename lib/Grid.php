<?php
class Grid extends Grid_Advanced{

	public $sn=1;

	function format_mydatetype($field){
		$this->current_row[$field]=date('d-m-Y', strtotime($field));
	}

	function format_numberinwords($field){
		$this->current_row[$field]= date('M',strtotime('1970-'.$this->current_row[$field].'-01'));
		return;

		$array=array("Zero","one",'two','three','four','five','six','seven','eight','nine');
		if($this->current_row[$field] % 2 == 0)
			$this->current_row_html[$field] = "<font color='red'>".$array[  $this->current_row[$field]   ] . "</font>";
		else
			$this->current_row_html[$field] = "<font color='green'>".$array[  $this->current_row[$field]   ] . "</font>";
	}

	function format_sno($field){
		$this->current_row[$field]=$this->sn;
		$this->sn++;
	}

}