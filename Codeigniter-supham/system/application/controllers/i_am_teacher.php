<?php
class I_am_teacher extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('i_am_teacher_model');
 	} 	
 	function I_am_teacher(){
 		$this->__construct(); 		
 	}	
	function index(){
		I_am_teacher::view();	
	}	
	function view(){		
		$data = array();		
		$id = $this->i_am_teacher_model->getIDI_am_teacher();
		$data['i_am_teacher'] = $this->i_am_teacher_model->getI_am_teacher($id);
		$this->layout->frontPage('i_am_teacher_view',$data);			
	}	
}
?>
