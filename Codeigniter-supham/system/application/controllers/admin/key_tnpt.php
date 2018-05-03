<?php
class Key_tnpt extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('key_tnpt_model'); 
 	} 	
 	function Key_tnpt(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Key_tnpt::add();		
	}	
	function add(){
		checkLogin();
		$this->layout->backPage('key_tnpt_add');							
	}
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$key_tnpt = $this->key_tnpt_model->getKey_tnpt($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($key_tnpt){
			$data['title'] = $key_tnpt->title;
			$data['description'] = $key_tnpt->description;
			$data['image'] = $key_tnpt->image;
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}			
		$this->layout->backPage('key_tnpt_edit',$data);							
	}
	function deleteImage($id,$page=0){
 		checkLogin();			
 		$key_tnpt = $this->key_tnpt_model->getKey_tnpt($id) ;
 		if($key_tnpt) {
			if( file_exists('uploads/key_tnpt/'.$key_tnpt->image) )		 		
		 		unlink('uploads/key_tnpt/'.$key_tnpt->image);			
		} 
		$this->key_tnpt_model->deleteImageKey_tnpt($id);
		redirect('admin/key_tnpt/edit/'.$id.'/'.$page);
 	}
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['key_tnpt'] = $this->key_tnpt_model->allKey_tnpt($page);
		$config = pagination(base_url().'admin/key_tnpt/all', $this->key_tnpt_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('key_tnpt_all',$data);			
	}
	function view($id){
		checkLogin();
		$data = array();		
		$data['key_tnpt'] = $this->key_tnpt_model->getKey_tnpt($id);
		$this->layout->backPage('key_tnpt_view',$data);			
	}
	function save_add(){
		checkLogin();		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('key_tnpt_add');	
		} 
		else{
			$image = key_tnpt::key_tnptUpload();			
			if($this->key_tnpt_model->addKey_tnpt($image)){				
				redirect('admin/key_tnpt/all');										
			} 		
			else{
				redirect('admin/key_tnpt/add');
			}
		}
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$data = array();
		$key_tnpt = $this->key_tnpt_model->getKey_tnpt($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($key_tnpt){
			$data['title'] = $key_tnpt->title;
			$data['description'] = $key_tnpt->description;
			if($key_tnpt->image)
				$data['image'] = $key_tnpt->image;
			else 
				$data['image'] = key_tnpt::key_tnptUpload();
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('key_tnpt_edit',$data);	
		} 
		else{
			if($this->key_tnpt_model->editKey_tnpt($id,$data['image'])){				
				redirect('admin/key_tnpt/all/'.$page);										
			} 		
			else{
				redirect('admin/key_tnpt/edit');
			}
		}
	}
	function delete($id=0){
		checkLogin();
		$key_tnpt = $this->key_tnpt_model->getKey_tnpt($id) ;
 		if($key_tnpt) {
 			if($key_tnpt->image)
				if( file_exists('uploads/key_tnpt/'.$key_tnpt->image) )		 		
		 			unlink('uploads/key_tnpt/'.$key_tnpt->image);			
		} 
		$this->key_tnpt_model->deleteKey_tnpt($id);	
		redirect('admin/key_tnpt/all');
	}	
	function key_tnptUpload($path = './uploads/'){
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
