<?php
class Process_selection extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('process_selection_model');
 	} 	
 	function Pprocess_selection(){
 		$this->__construct(); 		
 	}	
	function index(){
		Process_selection::view();	
	}	
	function view(){		
		$data = array();		
		$id = $this->process_selection_model->getIDProcess_selection();
		$data['process_selection'] = $this->process_selection_model->getProcess_selection($id);
		$this->layout->frontPage('process_selection_view',$data);			
	}	
}
?>
