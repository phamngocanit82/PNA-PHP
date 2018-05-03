<?php
class Welcome extends Controller {
	function __construct(){
 		parent::Controller(); 			
 	} 	
 	function Welcome(){
 		$this->__construct(); 		
 	}	
	function index(){		
		redirect('main');
	}
}
?>
