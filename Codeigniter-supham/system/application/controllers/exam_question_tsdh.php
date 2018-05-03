<?php
class Exam_question_tsdh extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('exam_question_tsdh_model'); 
 	} 	
 	function Exam_question_tsdh(){
 		$this->__construct(); 		
 	}	
	function index(){		
		Exam_question_tsdh::all();		
	}		
	function all($page=0){		
		$data = array();
		$data['page'] = $page;
		$data['exam_question_tsdh'] = $this->exam_question_tsdh_model->allExam_question_tsdh($page);
		$config = pagination(base_url().'exam_question_tsdh/all', $this->exam_question_tsdh_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('exam_question_tsdh_all',$data);			
	}
	function view($id){		
		$data = array();		
		$data['exam_question_tsdh'] = $this->exam_question_tsdh_model->getExam_question_tsdh($id);
		$this->layout->frontPage('exam_question_tsdh_view',$data);			
	}	 
}	 
?>
