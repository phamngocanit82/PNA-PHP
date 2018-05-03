<?php
class Key_tsdh extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('key_tsdh_model'); 
 	} 	
 	function Key_tsdh(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Key_tsdh::add();		
	}	
	function add(){
		checkLogin();
		$this->layout->backPage('key_tsdh_add');							
	}
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$key_tsdh = $this->key_tsdh_model->getKey_tsdh($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($key_tsdh){
			$data['title'] = $key_tsdh->title;
			$data['description'] = $key_tsdh->description;
			$data['image'] = $key_tsdh->image;
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}			
		$this->layout->backPage('key_tsdh_edit',$data);							
	}
	function deleteImage($id,$page=0){
 		checkLogin();			
 		$key_tsdh = $this->key_tsdh_model->getKey_tsdh($id) ;
 		if($key_tsdh) {
			if( file_exists('uploads/key_tsdh/'.$key_tsdh->image) )		 		
		 		unlink('uploads/key_tsdh/'.$key_tsdh->image);			
		} 
		$this->key_tsdh_model->deleteImageKey_tsdh($id);
		redirect('admin/key_tsdh/edit/'.$id.'/'.$page);
 	}
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['key_tsdh'] = $this->key_tsdh_model->allKey_tsdh($page);
		$config = pagination(base_url().'admin/key_tsdh/all', $this->key_tsdh_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('key_tsdh_all',$data);			
	}
	function view($id){
		checkLogin();
		$data = array();		
		$data['key_tsdh'] = $this->key_tsdh_model->getKey_tsdh($id);
		$this->layout->backPage('key_tsdh_view',$data);			
	}
	function save_add(){
		checkLogin();		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('key_tsdh_add');	
		} 
		else{
			$image = key_tsdh::key_tsdhUpload();			
			if($this->key_tsdh_model->addKey_tsdh($image)){				
				redirect('admin/key_tsdh/all');										
			} 		
			else{
				redirect('admin/key_tsdh/add');
			}
		}
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$data = array();
		$key_tsdh = $this->key_tsdh_model->getKey_tsdh($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($key_tsdh){
			$data['title'] = $key_tsdh->title;
			$data['description'] = $key_tsdh->description;
			if($key_tsdh->image)
				$data['image'] = $key_tsdh->image;
			else 
				$data['image'] = key_tsdh::key_tsdhUpload();
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('key_tsdh_edit',$data);	
		} 
		else{
			if($this->key_tsdh_model->editKey_tsdh($id,$data['image'])){				
				redirect('admin/key_tsdh/all/'.$page);										
			} 		
			else{
				redirect('admin/key_tsdh/edit');
			}
		}
	}
	function delete($id=0){
		checkLogin();
		$key_tsdh = $this->key_tsdh_model->getKey_tsdh($id) ;
 		if($key_tsdh) {
 			if($key_tsdh->image)
				if( file_exists('uploads/key_tsdh/'.$key_tsdh->image) )		 		
		 			unlink('uploads/key_tsdh/'.$key_tsdh->image);			
		} 
		$this->key_tsdh_model->deleteKey_tsdh($id);	
		redirect('admin/key_tsdh/all');
	}	
	function key_tsdhUpload($path = './uploads/'){
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
