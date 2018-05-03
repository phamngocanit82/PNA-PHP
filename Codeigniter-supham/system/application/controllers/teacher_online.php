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
		Teacher_online::all();
	}	
	function all($page=0){		
		$data = array();
		$data['page'] = $page;		
		$data['teacher_online'] = $this->teacher_online_model->allTeacher_online($page);
		$config = pagination(base_url().'teacher_online/all', $this->teacher_online_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('teacher_online_all',$data);
	}	
	function view($id_user){		
		$data = array();		
		$data['teacher_online'] = $this->teacher_online_model->getTeacher_online($id_user);
		$this->layout->frontPage('teacher_online_view',$data);			
	}			
}	
?>
