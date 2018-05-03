<?php
class Advertise extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->library('pagination');		
 		$this->load->model('advertise_model');  		
 	} 	
 	function Advertise(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Advertise::add();		
	}	
	function add(){
		checkLogin();
		$this->layout->backPage('advertise_add');							
	}
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$advertise = $this->advertise_model->getAdvertise($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($advertise){
			$data['visible'] = $advertise->visible;
			$data['url'] = $advertise->url;
			$data['image'] = $advertise->image;
		}
		else{
			$data['url'] = '';
			$data['image'] = '';
		}
		$this->layout->backPage('advertise_edit',$data);							
	}
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['advertise'] = $this->advertise_model->allAdvertise($page);
		$config = pagination(base_url().'admin/advertise/all', $this->advertise_model->getTotalRows(), DEFAULT_LIMIT, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('advertise_all',$data);			
	}
	function save_add(){
		checkLogin();	
		$image = Advertise::advertiseUploadImage();	
		$this->advertise_model->addAdvertise($image);
		redirect('admin/advertise/all');
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$image = '';
		$advertise = $this->advertise_model->getAdvertise($id); 
		if($advertise->image)	
			$image = $advertise->image;	
		else 
			$image = Advertise::advertiseUploadImage();			
		$this->advertise_model->editAdvertise($id,$image);				
		redirect('admin/advertise/all/'.$page);													
		
	}
	function delete($id=0){
		checkLogin();
		$advertise = $this->advertise_model->getAdvertise($id) ;
 		if($advertise) {
 			if($advertise->image)
			if( file_exists('uploads/'.$advertise->image) )		 		
		 		unlink('uploads/'.$advertise->image);			
		} 
		$this->advertise_model->deleteAdvertise($id);	
		redirect('admin/advertise/all');
	}
	function deleteImage($id=0,$page=0){
		checkLogin();
		$advertise = $this->advertise_model->getAdvertise($id) ;
 		if($advertise) {
 			if($advertise->image)
			if( file_exists('uploads/'.$advertise->image) )		 		
		 		unlink('uploads/'.$advertise->image);			
		} 
		$this->advertise_model->deleteImageAdvertise($id);	
		redirect('admin/advertise/edit/'.$id.'/'.$page);
	}
	function visible($id=0,$page=0,$visible=0){
		$this->advertise_model->editVisible($id,$visible);
		redirect('admin/advertise/all/'.$page);
	}
	function advertiseUploadImage($path = './uploads/' ){				
 		chmod('./uploads',0777);
		$config['upload_path'] =$path;
		$config['allowed_types'] = 'gif|jpg|png|bmp';
		$config['max_size']	= MAX_IMAGE_SIZE;	
		$this->load->library('upload', $config);		
		if( ! $this->upload->do_upload('image')){				
			return '' ;
		} 
		else{			
			return $this->upload->file_name;
		}		
	} 
}
?>
