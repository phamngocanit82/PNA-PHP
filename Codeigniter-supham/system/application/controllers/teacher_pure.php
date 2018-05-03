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
		Teacher_pure::all();
	}	
	function all($page=0){		
		$data = array();
		$data['page'] = $page;		
		$data['teacher_pure'] = $this->teacher_pure_model->allteacher_pure($page);
		$config = pagination(base_url().'teacher_pure/all', $this->teacher_pure_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('teacher_pure_all',$data);
	}	
	function view($id_user){		
		$data = array();		
		$data['teacher_pure'] = $this->teacher_pure_model->getTeacher_pure($id_user);
		$this->layout->frontPage('teacher_pure_view',$data);			
	}			
}	
?>
