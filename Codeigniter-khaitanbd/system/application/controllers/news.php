<?php
class News extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('pagination');	
		$this->load->model('news_model');
		$this->load->model('menu_model');
		$this->load->model('category_model');
		$this->load->model('product_model');
 	} 	
 	function News(){
 		$this->__construct(); 		
 	}	
	function index(){
		$this->all(0);
	}	
	function all($page = 0){	
		$data['menu'] = $this->menu_model->get_allmenu();
		$data['tab'] = 2;	
		$data['news'] = $this->news_model->get_news($page);
		$data['page'] = $page;
		$config = pagination(base_url().'news/all', $this->news_model->get_total_rows(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->layout->frontPage('news_all',$data);
	}	
	function detail($id = 0){		
		$data['menu'] = $this->menu_model->get_allmenu();
		$data['tab'] = 2;	
		$data['news'] = $this->news_model->get_news_id($id);
		$this->layout->frontPage('news_detail',$data);
	}
}
?>
