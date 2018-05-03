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
		Salary_reference::view();	
	}	
	function view(){		
		$data = array();		
		$id = $this->salary_reference_model->getIDSalary_reference();
		$data['salary_reference'] = $this->salary_reference_model->getSalary_reference($id);
		$this->layout->frontPage('salary_reference_view',$data);			
	}	
}
?>
