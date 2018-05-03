<?php
class Videos extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
 	} 	
 	function Videos(){
 		$this->__construct(); 		
 	}	
	function index(){
		$data = array();
		$data['tab'] = 4;
		$this->layout->frontPage('videos',$data);
	}	
}
?>
