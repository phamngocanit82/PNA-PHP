<?php
class Secret_find_teacher extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('secret_find_teacher_model');
 	} 	
 	function Secret_find_teacher(){
 		$this->__construct(); 		
 	}	
	function index(){
		Secret_find_teacher::view();	
	}	
	function view(){		
		$data = array();		
		$id = $this->secret_find_teacher_model->getIDSecret_find_teacher();
		$data['secret_find_teacher'] = $this->secret_find_teacher_model->getSecret_find_teacher($id);
		$this->layout->frontPage('secret_find_teacher_view',$data);			
	}	
}
?>
