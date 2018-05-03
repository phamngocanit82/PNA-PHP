<?php
class News extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		checkLogin();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->library('pagination');	
		$this->load->model('news_model');			
 	} 	
 	function News(){
 		$this->__construct(); 		
 	}	
	function index(){	
		$this->all(0);
	}	
	function all($page = 0){		
		$data['news'] = $this->news_model->get_news($page);
		$data['page'] = $page;
		$config = pagination(base_url().'admin/news/all', $this->news_model->get_total_rows(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->layout->backPage('news_all',$data);
	}	
	function detail($id = 0){		
		$data['news'] = $this->news_model->get_news_id($id);
		$this->layout->backPage('news_detail',$data);
	}	
	function add(){				
		$this->form_validation->set_rules('title','Title', 'required');
		if ($this->form_validation->run() == FALSE){	
			$data['title'] = '';
			$data['description'] = '';
			$data['lock'] = $this->input->post('lock');
			$this->layout->backPage('news_add',$data);	
		} 
		else{
			$news = new news_model();
			$news->title = $this->input->post('title');
			$news->description = $this->input->post('description');
			$news->lock = ! $this->input->post('lock');
			$news->add();
			redirect('admin/news/add');	
		}
	}
	function delete($id = 0){
		$this->news_model->delete($id);
		redirect('admin/news');
	}
	function edit($id = 0){
		$news = $this->news_model->get_news_id($id); 
		if($news){
			$data['id'] = $news->id;
			$data['title'] = $news->title;
			$data['description'] = $news->description;
			$data['lock'] = $news->lock;	
			$this->layout->backPage('news_edit',$data);
		}
		else {
			$this->all(0);
		}
	}
	function save_edit($id = 0){				
		$this->form_validation->set_rules('title','Title', 'required');
		if ($this->form_validation->run() == FALSE){	
			$data['id'] = $id;
			$data['title'] = $this->input->post('title');;
			$data['description'] = $this->input->post('description');;
			$data['lock'] = $this->input->post('lock');;
			$this->layout->backPage('news_edit',$data);	
		} 
		else{
			$news = new news_model();
			$news->title = $this->input->post('title');
			$news->description = $this->input->post('description');
			$news->lock = $this->input->post('lock');
			$news->edit($id);
			redirect('admin/news/all');	
		}
	}
}
?>