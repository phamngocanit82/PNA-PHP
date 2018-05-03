<?php
class Login extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
 	} 	
 	function Login(){
 		$this->__construct(); 		
 	}	
	function index(){
		if($this->session->userdata('user'))
			redirect('admin/product');	
		$this->load->view('back_end/login');
	}	
	function checklogin(){
		$data['email'] = $this->input->post('login_email');
		$data['password'] = $this->input->post('login_password');
		if($data['email']=='admin' && $data['password']=='lien12a1'){
			$newdata = array('user' => $data);
			$this->session->set_userdata($newdata);  
			redirect('admin/product');
		}
		else
			redirect('admin/login');
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}
?>