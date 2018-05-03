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
		Teacher_quality::all();
	}	
	function all($page=0){		
		$data = array();
		$data['page'] = $page;		
		$data['teacher_quality'] = $this->teacher_quality_model->allTeacher_quality($page);
		$config = pagination(base_url().'teacher_quality/all', $this->teacher_quality_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('teacher_quality_all',$data);
	}	
	function view($id_user){		
		$data = array();		
		$data['teacher_quality'] = $this->teacher_quality_model->getTeacher_quality($id_user);
		$this->layout->frontPage('teacher_quality_view',$data);			
	}			
}	
?>
