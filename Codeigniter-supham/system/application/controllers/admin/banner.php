<?php
class Banner extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();		
		$this->load->model('banner_model'); 
 	} 	
 	function Banner(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Banner::add();		
	}	
	function add(){		
		checkLogin();
		$data = array();
		if($this->banner_model->getTotalRows()>0){
			$id = $this->banner_model->getIDBanner();
			$banner = $this->banner_model->getBanner($id); 
			$data['visible'] = $banner->visible;	
			$data['image01'] = $banner->image01;	
			$data['image02'] = $banner->image02;	
			$data['id'] = $id;
		}
		else{
			$data['visible'] = '';
			$data['image01'] = '';	
			$data['image02'] = '';
			$data['id'] = '';
		}		
		$this->layout->backPage('banner',$data);							
	}
	function delete($id=0,$image='',$check='false'){
		$banner = $this->banner_model->getBanner($id);
		if($image == 'image01'){
			if( file_exists('uploads/'.$banner->image01) )		 		
		 		unlink('uploads/'.$banner->image01);	
		}
		if($image == 'image02'){
			if( file_exists('uploads/'.$banner->image02) )		 		
		 		unlink('uploads/'.$banner->image02);	
		}		 		
		$this->banner_model->deleteImageBanner($id,$image,$check);
		redirect("admin/banner");
	}
	function save(){				
		if($this->banner_model->getTotalRows()>0){
			$id = $this->banner_model->getIDBanner();
			$banner = $this->banner_model->getBanner($id); 
			if($banner->image01)
				$image01 = $banner->image01;
			else 
				$image01 = Banner::bannerUploadImage01();
			if($banner->image02)
				$image02 = $banner->image02;
			else 
				$image02 = Banner::bannerUploadImage02();
			$this->banner_model->editBanner($id,$image01,$image02);
		}
		else{			
			$image01 = Banner::bannerUploadImage01();
			$image02 = Banner::bannerUploadImage02();
			$this->banner_model->addBanner($image01,$image02);
		}
		redirect('admin/banner');
	}	
	function bannerUploadImage01($path = './uploads/' ){				
 		chmod('./uploads',0777);
		$config['upload_path'] =$path;
		$config['allowed_types'] = 'gif|jpg|png|bmp';
		$config['max_size']	= MAX_IMAGE_SIZE;	
		$this->load->library('upload', $config);		
		if( ! $this->upload->do_upload('image01')){				
			return '' ;
		} 
		else{			
			return $this->upload->file_name;
		}		
	} 
	function bannerUploadImage02($path = './uploads/' ){				
 		chmod('./uploads',0777);
		$config['upload_path'] =$path;
		$config['allowed_types'] = 'gif|jpg|png|bmp';
		$config['max_size']	= MAX_IMAGE_SIZE;	
		$this->load->library('upload', $config);		
		if( ! $this->upload->do_upload('image02')){				
			return '' ;
		} 
		else{			
			return $this->upload->file_name;
		}		
	} 	
}
?>
