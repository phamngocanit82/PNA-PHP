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
		checkLogin();
		redirect('admin/register');			
	}	
	function logout(){ 	 		
 		$this->session->sess_destroy();
 		redirect('admin/login');
 	}
}
?>