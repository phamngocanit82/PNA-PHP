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
	function index($page=0){
		$data = array();
		$data['tab'] = 7;				
		$data['page'] = $page;
		$data['news'] = $this->news_model->getAll($page);
		$config = pagination(base_url().'admin/news/index', $this->news_model->getTotalRows(), DEFAULT_LIMIT, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('news_all',$data);
	}	
	function news_add(){
		$data = array();
		$data['tab'] = 7;	
		$this->layout->backPage('news_add',$data);
	}
	function news_save(){
		$data = array();
		$data['tab'] = 7;	
		$this->form_validation->set_rules('title',"(*)", 'required');
		$this->form_validation->set_rules('description',"(*)", 'required');		
		$this->form_validation->set_error_delimiters("<span style='color:#FF0000'>&nbsp;","</span>");
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('news_add',$data);	
		} 
		else{				
			$this->news_model->add();
			redirect('admin/news');
		}
	}
	function edit($id=0,$page=0){		
		$data = array();
		$data['tab'] = 7;		
		$data['id'] = $id;
		$data['page'] = $page;
		$news = $this->news_model->getID($id); 
		$data['news'] = $news;
		if($news){
			$data['title'] = $news->title;
			$data['description'] = $news->description;			
		}
		else{
			$data['title'] = '';
			$data['description'] = '';			
		}			
		$this->layout->backPage('news_edit',$data);							
	}
	function save_edit($id=0,$page=0){		
		$data = array();
		$data['tab'] = 7;		
		$data['id'] = $id;
		$data['page'] = $page;
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');	
			
		$this->form_validation->set_rules('title',"(*)", 'required');
		$this->form_validation->set_rules('description',"(*)", 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('news_edit',$data);	
		} 
		else{
			$this->news_model->edit($id);
			redirect('admin/news/index/'.$page);
		}
		
	}	
	function detail($id=0,$page=0){
		$data = array();	
		$data['tab'] = 7;	
		$data['page'] = $page;
		$data['news'] = $this->news_model->getID($id);		
		$this->layout->backPage('news_detail',$data);	
	}
	function delete($id=0){				
		$this->news_model->delete($id);	
		redirect('admin/news');
	}	
	
}
?>