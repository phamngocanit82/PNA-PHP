<?php
class Photos_group extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');		
		$this->load->model('photos_group_model');
 	} 	
 	function Photos_group(){
 		$this->__construct(); 		
 	}	
	function index($page=0){
		$data = array();
		$data['tab'] = 7;				
		$data['page'] = $page;
		$data['photos_group'] = $this->photos_group_model->getAll($page);
		$config = pagination(base_url().'admin/photos_group/index', $this->photos_group_model->getTotalRows(), DEFAULT_LIMIT, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('photos_group_all',$data);
	}	
	function add(){
		$data = array();
		$data['tab'] = 7;				
		$this->layout->backPage('photos_group_add',$data);
	}
	function save_add(){
		$data = array();
		$data['tab'] = 7;	
		$this->form_validation->set_rules('title',"(*)", 'required');		
		$this->form_validation->set_error_delimiters("<span style='color:#FF0000'>&nbsp;","</span>");
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('photos_group_add',$data);	
		} 
		else{				
			$this->photos_group_model->add();
			redirect('admin/photos_group');
		}
	}	
	function edit($id=0,$page=0){		
		$data = array();
		$data['tab'] = 7;		
		$data['id'] = $id;
		$data['page'] = $page;
		$photos_group = $this->photos_group_model->getID($id); 
		$data['photos_group'] = $photos_group;
		if($photos_group){
			$data['title'] = $photos_group->title;			
		}
		else{
			$data['title'] = '';			
		}			
		$this->layout->backPage('photos_group_edit',$data);							
	}
	function save_edit($id=0,$page=0){		
		$data = array();
		$data['tab'] = 7;		
		$data['id'] = $id;
		$data['page'] = $page;
		$data['title'] = $this->input->post('title');		
			
		$this->form_validation->set_rules('title',"(*)", 'required');		
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('photos_group_edit',$data);	
		} 
		else{
			$this->photos_group_model->edit($id);
			redirect('admin/photos_group/index/'.$page);
		}
		
	}	
	function detail($id=0,$page=0){
		$data = array();	
		$data['tab'] = 7;	
		$data['page'] = $page;
		$data['photos_group'] = $this->photos_group_model->getID($id);		
		$this->layout->backPage('photos_group_detail',$data);	
	}
	function delete($id=0){				
		$this->photos_group_model->delete($id);	
		redirect('admin/photos_group');
	}	
	
}
?>