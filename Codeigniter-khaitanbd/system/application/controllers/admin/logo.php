<?php
class Logo extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		checkLogin();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->library('pagination');	
		$this->load->model('logo_model');		
 	} 	
 	function Product(){
 		$this->__construct(); 		
 	}	
	function index($page = 0){	
		$this->all(0);
	}	
	function all($page = 0){	
		$data['logo'] = $this->logo_model->get_alllogo();
		$data['page'] = $page;
		$config = pagination(base_url().'admin/logo/all', $this->logo_model->get_total_rows(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->layout->backPage('logo_all',$data);
	}	
	function add(){		
		$logo = new logo_model();
		$logo->image = Logo::pictureUpload();
		if($logo->image){
			$logo->add();
		}
		$this->layout->backPage('logo_add',null);
	}
	function delete($id = 0){
		$logo = $this->logo_model->get_logoid($id);
		if($logo){
			if( file_exists($logo->image) )		 		
		 		unlink($logo->image);
			$this->logo_model->delete($id);
			redirect('admin/logo');
		}
		else{
			redirect('admin/logo/all');
		}
	}
	function pictureUpload($picture='image_photo',$path = './images/logo/' ){				
 		chmod('./images/logo',0777);
		$config['upload_path'] =$path;
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= MAX_IMAGE_SIZE;	
		$this->load->library('upload', $config);		
		if( ! $this->upload->do_upload($picture)){
			return '' ;
		} 
		else{			
			return 'images/logo/'.$this->upload->file_name;
		}		
	} 
	
}
?>