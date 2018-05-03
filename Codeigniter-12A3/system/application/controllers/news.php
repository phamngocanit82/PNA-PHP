<?php
class News extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('pagination');	
		$this->load->model('news_model');
 	} 	
 	function News(){
 		$this->__construct(); 		
 	}	
	function index($page=0){
		$data = array();
		$data['tab'] = 7;				
		$data['page'] = $page;
		$data['news'] = $this->news_model->getAll($page);
		$config = pagination(base_url().'news/index', $this->news_model->getTotalRows(), DEFAULT_LIMIT, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('news_all',$data);
	}	
	function detail($id=0){
		$data = array();	
		$data['tab'] = 7;	
		$data['news'] = $this->news_model->getID($id);		
		$this->layout->frontPage('news_detail',$data);	
	}
}
?>