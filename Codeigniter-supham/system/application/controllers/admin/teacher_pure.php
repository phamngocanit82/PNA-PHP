<?php
class Teacher_pure extends Controller {
	function __construct(){
 		parent::Controller();
 		changeLanguage();
 		$this->load->library('pagination');
		$this->load->library('validation');
		$this->load->library('form_validation');		
		$this->load->model('teacher_pure_model');		
 	} 	
 	function Teacher_pure(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Teacher_pure::view();
	}	
	function view($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;		
		$data['teacher_pure'] = $this->teacher_pure_model->allteacher_pure($page);
		$config = pagination(base_url().'admin/teacher_pure/view', $this->teacher_pure_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('teacher_pure_view',$data);
	}	
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;		
		$data['teacher_pure'] = $this->teacher_pure_model->allteacher_pureAdmin($page);
		$config = pagination(base_url().'admin/teacher_pure/all', $this->teacher_pure_model->getTotalRowsAdmin(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('teacher_pure_all',$data);
	}	
	function select($id_user=0){
		checkLogin();		
		$this->teacher_pure_model->addTeacher_pure($id_user);
		redirect('admin/teacher_pure/all');
	}	
	function delete($id=0){
		checkLogin();		
		$this->teacher_pure_model->deleteTeacher_pure($id);
		redirect('admin/teacher_pure');
	}	
}	
?>
