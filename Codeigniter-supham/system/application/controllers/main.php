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
		redirect('findteacher/all');		
	}	
	function successful(){
		$this->layout->frontPage('successful');		
	}	
}
?>
