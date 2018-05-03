<?php
class Register02 extends Controller {
	function __construct(){
 		parent::Controller();
 		changeLanguage();
 		$this->load->library('pagination');
		$this->load->library('validation');
		$this->load->library('form_validation');		
		$this->load->model('register02_model');		
 	} 	
 	function Register02(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Register02::all();
	}	
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;		
		$data['register02'] = $this->register02_model->allRegister02Admin($page);
		$config = pagination(base_url().'admin/register02/all', $this->register02_model->getTotalRowsAdmin(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('register02_remember_all',$data);
	}
	function view($id){	
		checkLogin();
		$data = array();		
		$data['register02'] = $this->register02_model->getRegister02Admin($id);
		$this->layout->backPage('register02_remember_view',$data);			
	}
	function display($id=0,$page=0,$lock=0){
		checkLogin();	
		$data = array();
		$data['id'] = $id;
		$data['page'] = $page;
		$this->register02_model->editLock($id,$lock);				
		redirect('admin/register02/all/'.$page);
	}
	function delete($id=0){
		checkLogin();
		$this->register02_model->deleteRegister02($id);	
		redirect('admin/register02/all');
	}
	function changepass(){
		$oldpassword = md5($this->input->post('oldpassword')); 
		$newpassword = $this->input->post('newpassword'); 
		$confirmpassword = $this->input->post('confirmpassword');
		if(($this->session->userdata('user')->password!=$oldpassword)||$newpassword!=$confirmpassword){
			$this->layout->backPage('register02_changepass');
		}
		else{
			$this->register02_model->changePassword($this->session->userdata('user')->id);	
			redirect('admin/main');
		}
		
	}
}	
?>
