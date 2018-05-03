<?php
class Register extends Controller {
	function __construct(){
 		parent::Controller();
 		changeLanguage();
 		$this->load->library('pagination');
		$this->load->library('validation');
		$this->load->library('form_validation');		
		$this->load->model('register_model');		
 	} 	
 	function Register(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Register::all();
	}	
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;		
		$data['register'] = $this->register_model->allRegisterAdmin($page);
		$config = pagination(base_url().'admin/register/all', $this->register_model->getTotalRowsAdmin(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('register_remember_all',$data);
	}
	function view($id){	
		checkLogin();
		$data = array();		
		$data['register'] = $this->register_model->getRegisterAdmin($id);
		$this->layout->backPage('register_remember_view',$data);			
	}
	function activation($id=0,$page=0,$activation=0){
		checkLogin();	
		$data = array();
		$data['id'] = $id;
		$data['page'] = $page;
		$this->register_model->editActivation($id,$activation);				
		redirect('admin/register/all/'.$page);
	}
	function delete($id=0){
		checkLogin();
		$register = $this->register_model->getRegister($id);
		if($register){
			if( file_exists('avatar/'.$register->avatar) )		 		
		 		unlink('avatar/'.$register->avatar);	
		}
		$this->register_model->deleteRegister($id);			
		redirect('admin/register/all');
	}
	function changepass(){
		$oldpassword = md5($this->input->post('oldpassword')); 
		$newpassword = $this->input->post('newpassword'); 
		$confirmpassword = $this->input->post('confirmpassword');
		if(($this->session->userdata('user')->password!=$oldpassword)||$newpassword!=$confirmpassword){
			$this->layout->backPage('register_changepass');
		}
		else{
			$this->register_model->changePassword($this->session->userdata('user')->id);	
			redirect('admin/main');
		}
		
	}	
	
}	
?>
