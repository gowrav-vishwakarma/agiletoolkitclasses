<?php 
        /**
                                                Example of Column 
                                        '********************************'
                                Created by : Rahul Vishnoi (cool_vishnoi@yahoo.co.in)
        *//*
        =================================================================================================
        Qus. what is the column and how to use it?
        Ans.    
            
                 * Implementation of columns
                 *
                 * Use: 
                 *
                 * 12-GS:
                 *  $cols=$this->add('Columns');
                 *  $cols->addColumn(4)->add('LoremIpsum');
                 *  $cols->addColumn(6)->add('LoremIpsum');
                 *  $cols->addColumn(2)->add('LoremIpsum');
                 *
                 * Flexible
                 *  $cols=$this->add('Columns');
                 *  $cols->addColumn('10%')->add('LoremIpsum');
                 *  $cols->addColumn('90%')->add('LoremIpsum');
                 *
                 * Auto
                 *  $cols=$this->add('Columns');
                 *  $cols->addColumn()->add('LoremIpsum');
                 *  $cols->addColumn()->add('LoremIpsum');
                 *

        =================================================================================================
        */

class page_chapter4 extends Page{
	function init(){
		parent::init();

        $this->add('Class_PagePlay')->play(4,'Columns');
        
        /**** column divided in 1 column *****/
        $cols1=$this->add('Columns');
        $front=$cols1->addColumn(12);
        $front->add('View_Info')->set("I am Main");
        
		// Devided In Two Parts 
		$cols2=$this->add('Columns');
        $left=$cols2->addColumn(6);
        $right=$cols2->addColumn(6);


        $left->add('View_Info')->set('I am Left ');
        $right->add('View_Error')->set('I am Right ');

		// Devided In Three Parts 
		$cols3=$this->add('Columns');
        $left=$cols3->addColumn(4);
        $middle=$cols3->addColumn(4);
        $right=$cols3->addColumn(4);


        $left->add('View_Info')->set('I am Left ');
        $right->add('View_Error')->set('I am Right ');
        $middle->add('View_Hint')->set('I am Middle ');


		// Devided In Four Parts 
		$cols4=$this->add('Columns');
        $col1=$cols4->addColumn(3);
        $col2=$cols4->addColumn(3);
        $col3=$cols4->addColumn(3);
        $col4=$cols4->addColumn(3);


        $col1->add('View_Info')->set('1');
        $col2->add('View_Error')->set('2');
        $col3->add('View_Warning')->set('3');
        $col4->add('View_Hint')->set('4');


		// Devided In Six Parts 
		$cols5=$this->add('Columns');
        $col1=$cols5->addColumn(2);
        $col2=$cols5->addColumn(2);
        $col3=$cols5->addColumn(2);
        $col4=$cols5->addColumn(2);
		$col5=$cols5->addColumn(2);
		$col6=$cols5->addColumn(2);


        $col1->add('View_Info')->set('1');
        $col2->add('View_Info')->set('2');
        $col3->add('View_Info')->set('3');
        $col4->add('View_Info')->set('4');
	    $col5->add('View_Info')->set('5');
    	$col6->add('View_Info')->set('6');


		// Devided In Twelve Parts 
		$cols6=$this->add('Columns');
           $col1=$cols6->addColumn(1);
	       $col2=$cols6->addColumn(1);
	       $col3=$cols6->addColumn(1);
	       $col4=$cols6->addColumn(1);
	       $col5=$cols6->addColumn(1);
	       $col6=$cols6->addColumn(1);
	       $col7=$cols6->addColumn(1);
	       $col8=$cols6->addColumn(1);
	       $col9=$cols6->addColumn(1);
	       $col10=$cols6->addColumn(1);
	       $col11=$cols6->addColumn(1);
	       $col12=$cols6->addColumn(1);
	       


        $col1->add('View_Info')->set('1');
        $col2->add('View_Info')->set('2');
        $col3->add('View_Info')->set('3');
        $col4->add('View_Info')->set('4');
	    $col5->add('View_Info')->set('5');
    	$col6->add('View_Info')->set('6');
	    $col7->add('View_Info')->set('7');
        $col8->add('View_Info')->set('8');
        $col9->add('View_Info')->set('9');
        $col10->add('View_Info')->set('10');
	    $col11->add('View_Info')->set('11');
    	$col12->add('View_Info')->set('12');

	}
}