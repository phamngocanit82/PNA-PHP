<?php
class Login extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
 		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('register_model');		
 	} 	
 	function Login(){
 		$this->__construct(); 		 		
 	}	
	function index(){
		if($this->session->userdata('user'))
			redirect('admin/register');		
		$this->form_validation->set_rules('email',"(*)", 'required|valid_email');
		$this->form_validation->set_rules('password',"(*)", 'required');
		$this->form_validation->set_error_delimiters("<span style='color:#FF0000'>","</span>");		
		if($this->form_validation->run() == FALSE){
			$this->load->view('admin/login');	
 		}
		else{
			$user = $this->register_model->loginAdmin();
			if(!$user)
			{
				$this->load->view('admin/login');	
			}
			else{
				$newdata = array('user' => $user);
				$this->session->set_userdata($newdata);  
				redirect('admin/main');
			}				
		}					
	}	
}
?>