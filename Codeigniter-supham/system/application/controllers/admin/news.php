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
		checkLogin();
		News::add();		
	}	
	function add(){
		checkLogin();
		$this->layout->backPage('news_add');							
	}
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$news = $this->news_model->getNews($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($news){
			$data['title'] = $news->title;
			$data['description'] = $news->description;
			$data['image'] = $news->image;
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}			
		$this->layout->backPage('news_edit',$data);							
	}
	function deleteImage($id,$page=0){
 		checkLogin();			
 		$news = $this->news_model->getNews($id) ;
 		if($news) {
			if( file_exists('uploads/news/'.$news->image) )		 		
		 		unlink('uploads/news/'.$news->image);			
		} 
		$this->news_model->deleteImagenews($id);
		redirect('admin/news/edit/'.$id.'/'.$page);
 	}
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['news'] = $this->news_model->allNews($page);
		$config = pagination(base_url().'admin/news/all', $this->news_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('news_all',$data);			
	}
	function view($id){
		checkLogin();
		$data = array();		
		$data['news'] = $this->news_model->getNews($id);
		$this->layout->backPage('news_view',$data);			
	}
	function save_add(){
		checkLogin();		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('news_add');	
		} 
		else{
			$image = news::newsUpload();			
			if($this->news_model->addNews($image)){				
				redirect('admin/news/all');										
			} 		
			else{
				redirect('admin/news/add');
			}
		}
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$data = array();
		$news = $this->news_model->getNews($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($news){
			$data['title'] = $news->title;
			$data['description'] = $news->description;
			if($news->image)
				$data['image'] = $news->image;
			else 
				$data['image'] = news::newsUpload();
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('news_edit',$data);	
		} 
		else{
			if($this->news_model->editNews($id,$data['image'])){				
				redirect('admin/news/all/'.$page);										
			} 		
			else{
				redirect('admin/news/edit');
			}
		}
	}
	function delete($id=0){
		checkLogin();
		$news = $this->news_model->getNews($id) ;
 		if($news) {
 			if($news->image)
			if( file_exists('uploads/news/'.$news->image) )		 		
		 		unlink('uploads/news/'.$news->image);			
		} 
		$this->news_model->deleteNews($id);	
		redirect('admin/news/all');
	}	
	function newsUpload($path = './uploads/' ){				
 		chmod('./uploads',0777);
		$config['upload_path'] =$path;
		$config['allowed_types'] = 'gif|jpg|png|bmp';
		$config['max_size']	= MAX_IMAGE_SIZE;	
		$this->load->library('upload', $config);		
		if( ! $this->upload->do_upload('avatar')){				
			return '' ;
		} 
		else{			
			return $this->upload->file_name;
		}		
	} 
}	 
?>
