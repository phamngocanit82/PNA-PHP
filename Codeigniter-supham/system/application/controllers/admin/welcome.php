<?php
class Welcome extends Controller {
	function __construct(){
 		parent::Controller();		 		
		changeLanguage();	
 	} 	
 	function Welcome(){
 		$this->__construct(); 		
 	}	
	function index(){	
		checkLogin();
		redirect('admin/main');	
	}	 
}
?>
