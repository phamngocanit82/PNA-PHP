<?php
class Secret_studing extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('secret_studing_model'); 
 	} 	
 	function Secret_studing(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Secret_studing::add();		
	}	
	function add(){
		checkLogin();
		$this->layout->backPage('secret_studing_add');							
	}
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$secret_studing = $this->secret_studing_model->getSecret_studing($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($secret_studing){
			$data['title'] = $secret_studing->title;
			$data['description'] = $secret_studing->description;
			$data['image'] = $secret_studing->image;
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}			
		$this->layout->backPage('secret_studing_edit',$data);							
	}
	function deleteImage($id,$page=0){
 		checkLogin();			
 		$secret_studing = $this->secret_studing_model->getSecret_studing($id) ;
 		if($secret_studing) {
			if( file_exists('uploads/secret_studing/'.$secret_studing->image) )		 		
		 		unlink('uploads/secret_studing/'.$secret_studing->image);			
		} 
		$this->secret_studing_model->deleteImageSecret_studing($id);
		redirect('admin/secret_studing/edit/'.$id.'/'.$page);
 	}
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['secret_studing'] = $this->secret_studing_model->allSecret_studing($page);
		$config = pagination(base_url().'admin/secret_studing/all', $this->secret_studing_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('secret_studing_all',$data);			
	}
	function view($id){
		checkLogin();
		$data = array();		
		$data['secret_studing'] = $this->secret_studing_model->getSecret_studing($id);
		$this->layout->backPage('secret_studing_view',$data);			
	}
	function save_add(){
		checkLogin();		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('secret_studing_add');	
		} 
		else{
			$image = secret_studing::secret_studingUpload();			
			if($this->secret_studing_model->addSecret_studing($image)){				
				redirect('admin/secret_studing/all');										
			} 		
			else{
				redirect('admin/secret_studing/add');
			}
		}
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$data = array();
		$secret_studing = $this->secret_studing_model->getSecret_studing($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($secret_studing){
			$data['title'] = $secret_studing->title;
			$data['description'] = $secret_studing->description;
			if($secret_studing->image)
				$data['image'] = $secret_studing->image;
			else 
				$data['image'] = secret_studing::secret_studingUpload();
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('secret_studing_edit',$data);	
		} 
		else{
			if($this->secret_studing_model->editSecret_studing($id,$data['image'])){				
				redirect('admin/secret_studing/all/'.$page);										
			} 		
			else{
				redirect('admin/secret_studing/edit');
			}
		}
	}
	function delete($id=0){
		checkLogin();
		$secret_studing = $this->secret_studing_model->getSecret_studing($id) ;
 		if($secret_studing) {
 			if($secret_studing->image)
				if( file_exists('uploads/secret_studing/'.$secret_studing->image) )		 		
		 			unlink('uploads/secret_studing/'.$secret_studing->image);			
		} 
		$this->secret_studing_model->deleteSecret_studing($id);	
		redirect('admin/secret_studing/all');
	}	
	function secret_studingUpload($path = './uploads/'){
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
