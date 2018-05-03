<?php
class Process_selection extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('process_selection_model'); 
 	} 	
 	function Process_selection(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Process_selection::add();		
	}	
	function add(){		
		checkLogin();
		$data = array();
		if($this->process_selection_model->getTotalRows()>0){
			$id = $this->process_selection_model->getIDProcess_selection();
			$process_selection = $this->process_selection_model->getProcess_selection($id); 
			$data['description'] = $process_selection->description;	
		}
		else{
			$data['description'] = '';
		}		
		$this->layout->backPage('process_selection_add',$data);							
	}
	function save(){
		if($this->process_selection_model->getTotalRows()>0){
			$id = $this->process_selection_model->getIDProcess_selection();
			$this->process_selection_model->editProcess_selection($id);
		}
		else{			
			$this->process_selection_model->addProcess_selection();
		}
		redirect('admin/process_selection');
	}	
}
?>
