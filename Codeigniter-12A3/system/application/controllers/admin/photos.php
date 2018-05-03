<?php
class Photos extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');		
		$this->load->model('photos_model');
		$this->load->model('photos_group_model');		
 	} 	
 	function Photos(){
 		$this->__construct(); 		
 	}	
	function index($page=0){
		$data = array();		
		$data['tab'] = 3;				
		$data['page'] = $page;
		$data['photos_group'] = $this->photos_group_model->All();
		$data['photos'] = $this->photos_model->getAll($page);
		$data['id_photos_group'] = $this->input->post('id_photos_group');
		$data['title'] = $this->input->post('title');
		$data['image'] = $this->input->post('image');
		$config = pagination(base_url().'admin/photos/index', $this->photos_model->getTotalRows(), DEFAULT_LIMIT, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('photos_all',$data);
	}	
	function save_add($page=0){
		$data = array();
		$data['tab'] = 3;	
		$data['page'] = $page;
		$data['photos_group'] = $this->photos_group_model->All();
		$data['photos'] = $this->photos_model->getAll($page);	
		$data['id_photos_group'] = $this->input->post('id_photos_group');
		$data['title'] = $this->input->post('title');
		$data['image'] = $this->input->post('image');	
		$this->form_validation->set_rules('image',"(*)", 'required');				
		$this->form_validation->set_error_delimiters("<span style='color:#FF0000'>&nbsp;","</span>");
		
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('photos_all',$data);	
		} 
		else{				
			$this->photos_model->add();
			$data['photos_group'] = $this->photos_group_model->All();
			$data['photos'] = $this->photos_model->getAll($page);
		
			$config = pagination(base_url().'admin/photos/index', $this->photos_model->getTotalRows(), DEFAULT_LIMIT, $page, 5);		
			$this->pagination->initialize($config);
			$this->layout->backPage('photos_all',$data);	
		}
	}
	function edit($id=0,$page=0){		
		$data = array();
		$data['tab'] = 3;		
		$data['id'] = $id;
		$data['page'] = $page;
		$data['photos_group'] = $this->photos_group_model->All();
		$photos = $this->photos_model->getID($id); 
		$data['photos'] = $photos;		
		if($photos){
			$data['id_photos_group'] = $photos->id_photos_group;
			$data['title'] = $photos->title;			
			$data['image'] = $photos->image;
		}
		else{
			$data['id_photos_group'] = 'assa';
			$data['title'] = '';			
			$data['image'] = '';
		}			
		$this->layout->backPage('photos_edit',$data);							
	}
	function save_edit($id=0,$page=0){		
		$data = array();
		$data['tab'] = 3;		
		$data['id'] = $id;
		$data['page'] = $page;
		$data['id_photos_group'] = $this->input->post('id_photos_group');
		$data['title'] = $this->input->post('title');
		$data['image'] = $this->input->post('image');
				
		$this->form_validation->set_rules('image',"(*)", 'required');		
		$this->form_validation->set_error_delimiters("<span style='color:#FF0000'>&nbsp;","</span>");
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('photos_edit',$data);	
		} 
		else{
			$this->photos_model->edit($id);
			redirect('admin/photos/index/'.$page);
		}
		
	}		
	function delete($id=0){				
		$this->photos_model->delete($id);	
		redirect('admin/photos');
	}	
}
?>