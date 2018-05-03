<?php
class Blogs extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();			
 	} 	
 	function Blogs(){
 		$this->__construct(); 		
 	}	
	function index(){
		$data = array();
		$data['tab'] = 2;		
		$this->layout->frontPage('blogs',$data);
	}	
	function is_valid_email($email) {
	  	$result = TRUE;
	  	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)){
	   	$result = FALSE;
	  	}
	  	return $result;
	}	
}
?>
