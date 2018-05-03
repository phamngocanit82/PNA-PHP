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
		checkLogin();
		Secret_find_teacher::add();		
	}	
	function add(){		
		checkLogin();
		$data = array();
		if($this->secret_find_teacher_model->getTotalRows()>0){
			$id = $this->secret_find_teacher_model->getIDSecret_find_teacher();
			$secret_find_teacher = $this->secret_find_teacher_model->getSecret_find_teacher($id); 
			$data['description'] = $secret_find_teacher->description;	
		}
		else{
			$data['description'] = '';
		}		
		$this->layout->backPage('secret_find_teacher_add',$data);							
	}
	function save(){
		if($this->secret_find_teacher_model->getTotalRows()>0){
			$id = $this->secret_find_teacher_model->getIDSecret_find_teacher();
			$this->secret_find_teacher_model->editSecret_find_teacher($id);
		}
		else{			
			$this->secret_find_teacher_model->addSecret_find_teacher();
		}
		redirect('admin/secret_find_teacher');
	}	
}
?>
