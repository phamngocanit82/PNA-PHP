<?php
class Chat extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->model('user_model');
 	} 	
 	function Chat(){
 		$this->__construct(); 		
 	}	
	function index(){
		$data = array();
		$data['tab'] = 1;
		
		$data['user'] = $this->user_model->getAll();
		$this->layout->frontPage('chat',$data);
	}	
}
?>