<?php
class Contact extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('contact_model');
 	} 	
 	function Contact(){
 		$this->__construct(); 		
 	}	
	function index(){
		Contact::add();
	}
	function add(){		
		$data = array();
		$this->form_validation->set_rules('name',"(*)", 'required');
		$this->form_validation->set_rules('address',"(*)", 'required');
		$this->form_validation->set_rules('email',"(*)", 'required|valid_email');
		$this->form_validation->set_error_delimiters("<span style='color:#FF0000'>","</span>");
		$data['telephone'] = $this->input->post('telephone');
		$data['mobilephone'] = $this->input->post('mobilephone');
		$data['description'] = $this->input->post('description');
		if($this->form_validation->run() == FALSE){
			$this->layout->frontPage('contact',$data);	
 		}
		else{			
			$this->contact_model->addContact();
			redirect('main/successful');
		}
	}	 	 	
}
?>
