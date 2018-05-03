<?php
class Salary_reference extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('salary_reference_model'); 
 	} 	
 	function Salary_reference(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Salary_reference::add();		
	}	
	function add(){		
		checkLogin();
		$data = array();
		if($this->salary_reference_model->getTotalRows()>0){
			$id = $this->salary_reference_model->getIDSalary_reference();
			$salary_reference = $this->salary_reference_model->getSalary_reference($id); 
			$data['description'] = $salary_reference->description;	
		}
		else{
			$data['description'] = '';
		}		
		$this->layout->backPage('salary_reference_add',$data);							
	}
	function save(){
		if($this->salary_reference_model->getTotalRows()>0){
			$id = $this->salary_reference_model->getIDSalary_reference();
			$this->salary_reference_model->editSalary_reference($id);
		}
		else{			
			$this->salary_reference_model->addSalary_reference();
		}
		redirect('admin/salary_reference');
	}	
}
?>
