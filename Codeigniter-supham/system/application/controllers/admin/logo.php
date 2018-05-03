<?php
class Logo extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();		
		$this->load->model('logo_model'); 
 	} 	
 	function Logo(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Logo::add();		
	}	
	function add(){		
		checkLogin();
		$data = array();
		if($this->logo_model->getTotalRows()>0){
			$id = $this->logo_model->getIDLogo();
			$logo = $this->logo_model->getLogo($id); 
			$data['image'] = $logo->image;	
			$data['id'] = $id;
		}
		else{
			$data['image'] = '';				
			$data['id'] = '';
		}		
		$this->layout->backPage('logo',$data);							
	}
	function delete($id=0){
		$logo = $this->logo_model->getLogo($id);
		if($logo){
			if( file_exists('uploads/'.$logo->image) )		 		
		 		unlink('uploads/'.$logo->image);	
		}		 		
		$this->logo_model->deleteImageLogo($id);
		redirect("admin/logo");
	}
	function save(){				
		if($this->logo_model->getTotalRows()>0){
			$id = $this->logo_model->getIDLogo();
			$logo = $this->logo_model->getLogo($id); 
			if($logo->image)
				$image = $logo->image;
			else 
				$image = Logo::logoUploadImage();			
			$this->logo_model->editLogo($id,$image);
		}
		else{			
			$image = logo::logoUploadImage();			
			$this->logo_model->addLogo($image);
		}
		redirect('admin/logo');
	}	
	function logoUploadImage($path = './uploads/' ){				
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
