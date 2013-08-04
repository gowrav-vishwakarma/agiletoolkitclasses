<?php 
class Class_PagePlay extends AbstractView{
	
	function init(){
		parent::init();
	}

	function play($page_no=2,$page_tital=null,$display_previous=true,$display_next=true,$page_prev=null,$page_next=null){

	$chapter_no=$page_no;

         /***** import titles from lib/class/title.php *****/
        $title_array=$this->add('Class_Title')->title_array();

        if($page_tital==null){
        $this->add('H1')->setHtml($title_array[$chapter_no]);
        }else{
        $this->add('H1')->setHtml($page_tital);
        }
        if($display_previous==true){

                if($page_prev==null){
                        
                        /***** Move on Previous Page *****/         
                        $btnPrevious=$this->add('Button')->setLabel('<<= : Chapter : ' . ($chapter_no-1) . '');
                        $btnPrevious->js('click')->univ()->redirect($this->api->url('chapter' . ($chapter_no-1) . ''));

                }else{
                        /***** Move on Previous Page *****/         
                        $btnPrevious=$this->add('Button')->setLabel('<<= : ' . $page_prev);
                        $btnPrevious->js('click')->univ()->redirect($this->api->url($page_prev));
        
                }
        
        }       

        if($display_next==true){

                if($page_next==null){
                        
                        /***** Move on Next Page *****/         
                        $btnNext=$this->add('Button')->setLabel('Chapter : ' . ($chapter_no+1) . ' : =>>');
                        $btnNext->js('click')->univ()->redirect($this->api->url('chapter' . ($chapter_no+1) . ''));
                        
                }else{
                        /***** Move on Next Page *****/         
                        $btnNext=$this->add('Button')->setLabel($page_next . ' : =>>');
                        $btnNext->js('click')->univ()->redirect($this->api->url($page_next));
        
                }

        }
                
        /***** break line ******/
        $this->add('HtmlElement')->setHtml('</br>');

	}

}