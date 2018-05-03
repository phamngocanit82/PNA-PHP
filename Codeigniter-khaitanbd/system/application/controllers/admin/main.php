<?php
class Main extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
 	} 	
 	function Main(){
 		$this->__construct(); 		
 	}	
	function index(){		
		$this->load->view('back_end/common/header');
	}		
}
?>