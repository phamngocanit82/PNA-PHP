<?php
class Music extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
 	} 	
 	function Music(){
 		$this->__construct(); 		
 	}	
	function index(){
		$data = array();
		$data['tab'] = 5;
		$this->layout->frontPage('music',$data);
	}	
}
?>
