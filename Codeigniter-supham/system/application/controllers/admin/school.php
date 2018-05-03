<?php
class School extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->library('pagination');		
 		$this->load->model('school_model');  		
 	} 	
 	function School(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		School::add();				
	}	
	function add(){
		checkLogin();
		$this->layout->backPage('school_add');							
	}
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$school = $this->school_model->getSchool($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($school)
			$data['schoolName'] = $school->name;
		else 	
			$data['schoolName'] = '';
		$this->layout->backPage('school_edit',$data);							
	}
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['school'] = $this->school_model->allSchool($page);
		$config = pagination(base_url().'admin/school/all', $this->school_model->getTotalRows(), DEFAULT_LIMIT, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('school_all',$data);			
	}
	function save_add(){
		checkLogin();		
		$this->form_validation->set_rules('schoolName',lang('require_schoolName'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('school_add');	
		} 
		else{
			if($this->school_model->addSchool()){				
				redirect('admin/school/all');										
			} 		
			else{
				redirect('admin/school/add');
			}
		}
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$data = array();
		$data['id'] = $id;
		$data['page'] = $page;
		$data['schoolName'] = $this->input->post('schoolName');	
		$this->form_validation->set_rules('schoolName',lang('require_schoolName'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('school_edit',$data);	
		} 
		else{
			if($this->school_model->editSchool($id)){				
				redirect('admin/school/all/'.$page);										
			} 		
			else{
				redirect('admin/school/edit');
			}
		}
	}
	function delete($id=0){
		checkLogin();
		$this->school_model->deleteSchool($id);	
		redirect('admin/school/all');
	}
	
}
?>
