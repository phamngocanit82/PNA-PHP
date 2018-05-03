<?php
class Diploma extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->library('pagination');		
 		$this->load->model('diploma_model');  		
 	} 	
 	function Diploma(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();		
		Diploma::add();
	}	
	function add(){
		checkLogin();
		$this->layout->backPage('diploma_add');							
	}
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$diploma = $this->diploma_model->getDiploma($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($diploma)
			$data['diplomaName'] = $diploma->name;
		else 	
			$data['diplomaName'] = '';
		$this->layout->backPage('diploma_edit',$data);							
	}
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['diploma'] = $this->diploma_model->allDiploma($page);
		$config = pagination(base_url().'admin/diploma/all', $this->diploma_model->getTotalRows(), DEFAULT_LIMIT, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('diploma_all',$data);			
	}
	function save_add(){
		checkLogin();		
		$this->form_validation->set_rules('diplomaName',lang('require_diplomaName'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('diploma_add');	
		} 
		else{
			if($this->diploma_model->addDiploma()){				
				redirect('admin/diploma/all');										
			} 		
			else{
				redirect('admin/diploma/add');
			}
		}
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$data = array();
		$data['id'] = $id;
		$data['page'] = $page;
		$data['diplomaName'] = $this->input->post('diplomaName');	
		$this->form_validation->set_rules('diplomaName',lang('require_diplomaName'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('diploma_edit',$data);	
		} 
		else{
			if($this->diploma_model->editDiploma($id)){				
				redirect('admin/diploma/all/'.$page);										
			} 		
			else{
				redirect('admin/diploma/edit');
			}
		}
	}
	function delete($id=0){
		checkLogin();
		$this->diploma_model->deleteDiploma($id);	
		redirect('admin/diploma/all');
	}
	
}
?>
