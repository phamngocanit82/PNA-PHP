<?php
class Announcement extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('announcement_model'); 
 	} 	
 	function Announcement(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Announcement::add();		
	}	
	function add(){
		checkLogin();
		$this->layout->backPage('announcement_add');							
	}
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$announcement = $this->announcement_model->getAnnouncement($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($announcement){
			$data['title'] = $announcement->title;
			$data['description'] = $announcement->description;
			$data['image'] = $announcement->image;
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}			
		$this->layout->backPage('announcement_edit',$data);							
	}
	function deleteImage($id,$page=0){
 		checkLogin();			
 		$announcement = $this->announcement_model->getAnnouncement($id) ;
 		if($announcement) {
			if( file_exists('uploads/announcement/'.$announcement->image) )		 		
		 		unlink('uploads/announcement/'.$announcement->image);			
		} 
		$this->announcement_model->deleteImageAnnouncement($id);
		redirect('admin/announcement/edit/'.$id.'/'.$page);
 	}
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['announcement'] = $this->announcement_model->allAnnouncement($page);
		$config = pagination(base_url().'admin/announcement/all', $this->announcement_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('announcement_all',$data);			
	}
	function view($id){
		checkLogin();
		$data = array();		
		$data['announcement'] = $this->announcement_model->getAnnouncement($id);
		$this->layout->backPage('announcement_view',$data);			
	}
	function save_add(){
		checkLogin();		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('announcement_add');	
		} 
		else{
			$image = Announcement::announcementUpload();			
			if($this->announcement_model->addAnnouncement($image)){				
				redirect('admin/announcement/all');										
			} 		
			else{
				redirect('admin/announcement/add');
			}
		}
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$data = array();
		$announcement = $this->announcement_model->getAnnouncement($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($announcement){
			$data['title'] = $announcement->title;
			$data['description'] = $announcement->description;
			if($announcement->image)
				$data['image'] = $announcement->image;
			else 
				$data['image'] = Announcement::announcementUpload();
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('announcement_edit',$data);	
		} 
		else{
			if($this->announcement_model->editAnnouncement($id,$data['image'])){				
				redirect('admin/announcement/all/'.$page);										
			} 		
			else{
				redirect('admin/announcement/edit');
			}
		}
	}
	function delete($id=0){
		checkLogin();
		$announcement = $this->announcement_model->getAnnouncement($id) ;
 		if($announcement) {
 			if($announcement->image)
				if( file_exists('uploads/announcement/'.$announcement->image) )		 		
		 			unlink('uploads/announcement/'.$announcement->image);			
		} 
		$this->announcement_model->deleteAnnouncement($id);	
		redirect('admin/announcement/all');
	}	
	function announcementUpload($path = './uploads/'){
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
