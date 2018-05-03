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
		checkLogin();
		I_am_teacher::add();		
	}	
	function add(){		
		checkLogin();
		$data = array();
		if($this->i_am_teacher_model->getTotalRows()>0){
			$id = $this->i_am_teacher_model->getIDI_am_teacher();
			$i_am_teacher = $this->i_am_teacher_model->getI_am_teacher($id); 
			$data['description'] = $i_am_teacher->description;	
		}
		else{
			$data['description'] = '';
		}		
		$this->layout->backPage('i_am_teacher_add',$data);							
	}
	function save(){
		if($this->i_am_teacher_model->getTotalRows()>0){
			$id = $this->i_am_teacher_model->getIDI_am_teacher();
			$this->i_am_teacher_model->editI_am_teacher($id);
		}
		else{			
			$this->i_am_teacher_model->addI_am_teacher();
		}
		redirect('admin/i_am_teacher');
	}	
}
?>
