<?php
class Teacher_quality extends Controller {
	function __construct(){
 		parent::Controller();
 		changeLanguage();
 		$this->load->library('pagination');
		$this->load->library('validation');
		$this->load->library('form_validation');		
		$this->load->model('teacher_quality_model');		
 	} 	
 	function Teacher_quality(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Teacher_quality::view();
	}	
	function view($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;		
		$data['teacher_quality'] = $this->teacher_quality_model->allTeacher_quality($page);
		$config = pagination(base_url().'admin/teacher_quality/view', $this->teacher_quality_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('teacher_quality_view',$data);
	}	
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;		
		$data['teacher_quality'] = $this->teacher_quality_model->allTeacher_qualityAdmin($page);
		$config = pagination(base_url().'admin/teacher_quality/all', $this->teacher_quality_model->getTotalRowsAdmin(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('teacher_quality_all',$data);
	}	
	function select($id_user=0){
		checkLogin();		
		$this->teacher_quality_model->addTeacher_quality($id_user);
		redirect('admin/teacher_quality/all');
	}	
	function delete($id=0){
		checkLogin();		
		$this->teacher_quality_model->deleteTeacher_quality($id);
		redirect('admin/teacher_quality');
	}	
}	
?>
