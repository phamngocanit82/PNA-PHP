<?php
class News extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('news_model'); 
 	} 	
 	function News(){
 		$this->__construct(); 		
 	}	
	function index(){		
		News::all();		
	}	
	function all($page=0){		
		$data = array();
		$data['page'] = $page;
		$data['news'] = $this->news_model->allNews($page);
		$config = pagination(base_url().'news/all', $this->news_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('news_all',$data);			
	}
	function view($id){		
		$data = array();		
		$data['news'] = $this->news_model->getNews($id);
		$this->layout->frontPage('news_view',$data);			
	}	 
}	 
?>
