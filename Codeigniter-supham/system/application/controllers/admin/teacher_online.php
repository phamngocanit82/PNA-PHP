<?php
class Teacher_online extends Controller {
	function __construct(){
 		parent::Controller();
 		changeLanguage();
 		$this->load->library('pagination');
		$this->load->library('validation');
		$this->load->library('form_validation');		
		$this->load->model('teacher_online_model');		
 	} 	
 	function Teacher_online(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Teacher_online::view();
	}	
	function view($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;		
		$data['teacher_online'] = $this->teacher_online_model->allTeacher_online($page);
		$config = pagination(base_url().'admin/teacher_online/view', $this->teacher_online_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('teacher_online_view',$data);
	}	
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;		
		$data['teacher_online'] = $this->teacher_online_model->allTeacher_onlineAdmin($page);
		$config = pagination(base_url().'admin/teacher_online/all', $this->teacher_online_model->getTotalRowsAdmin(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('teacher_online_all',$data);
	}	
	function select($id_user=0){
		checkLogin();		
		$this->teacher_online_model->addTeacher_online($id_user);
		redirect('admin/teacher_online/all');
	}	
	function delete($id=0){
		checkLogin();		
		$this->teacher_online_model->deleteTeacher_online($id);
		redirect('admin/teacher_online');
	}	
}	
?>
