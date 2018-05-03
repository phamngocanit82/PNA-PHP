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
		checkLogin();
		Why_need_teacher::add();		
	}	
	function add(){		
		checkLogin();
		$data = array();
		if($this->why_need_teacher_model->getTotalRows()>0){
			$id = $this->why_need_teacher_model->getIDWhy_need_teacher();
			$why_need_teacher = $this->why_need_teacher_model->getWhy_need_teacher($id); 
			$data['description'] = $why_need_teacher->description;	
		}
		else{
			$data['description'] = '';
		}		
		$this->layout->backPage('why_need_teacher_add',$data);							
	}
	function save(){
		if($this->why_need_teacher_model->getTotalRows()>0){
			$id = $this->why_need_teacher_model->getIDWhy_need_teacher();
			$this->why_need_teacher_model->editWhy_need_teacher($id);
		}
		else{			
			$this->why_need_teacher_model->addWhy_need_teacher();
		}
		redirect('admin/why_need_teacher');
	}	
}
?>
