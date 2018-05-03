<?php
class Why_need_teacher extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('why_need_teacher_model');
 	} 	
 	function Why_need_teacher(){
 		$this->__construct(); 		
 	}	
	function index(){
		Why_need_teacher::view();	
	}	
	function view(){		
		$data = array();		
		$id = $this->why_need_teacher_model->getIDWhy_need_teacher();
		$data['why_need_teacher'] = $this->why_need_teacher_model->getWhy_need_teacher($id);
		$this->layout->frontPage('why_need_teacher_view',$data);			
	}	
}
?>
