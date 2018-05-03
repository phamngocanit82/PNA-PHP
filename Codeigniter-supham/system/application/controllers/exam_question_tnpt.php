<?php
class Exam_question_tnpt extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('exam_question_tnpt_model'); 
 	} 	
 	function Exam_question_tnpt(){
 		$this->__construct(); 		
 	}	
	function index(){		
		Exam_question_tnpt::all();		
	}		
	function all($page=0){		
		$data = array();
		$data['page'] = $page;
		$data['exam_question_tnpt'] = $this->exam_question_tnpt_model->allExam_question_tnpt($page);
		$config = pagination(base_url().'exam_question_tnpt/all', $this->exam_question_tnpt_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('exam_question_tnpt_all',$data);			
	}
	function view($id){		
		$data = array();		
		$data['exam_question_tnpt'] = $this->exam_question_tnpt_model->getExam_question_tnpt($id);
		$this->layout->frontPage('exam_question_tnpt_view',$data);			
	}	 
}	 
?>
