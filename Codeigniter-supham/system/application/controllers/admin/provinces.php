<?php
class Provinces extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->library('pagination');		
 		$this->load->model('provinces_model');  		
 	} 	
 	function Provinces(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Provinces::add();				
	}	
	function add(){
		checkLogin();
		$this->layout->backPage('provinces_add');							
	}
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$provinces = $this->provinces_model->getProvinces($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($provinces)
			$data['provincesName'] = $provinces->name;
		else 	
			$data['provincesName'] = '';
		$this->layout->backPage('provinces_edit',$data);							
	}
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['provinces'] = $this->provinces_model->allProvinces($page);
		$config = pagination(base_url().'admin/provinces/all', $this->provinces_model->getTotalRows(), DEFAULT_LIMIT, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('provinces_all',$data);			
	}
	function save_add(){
		checkLogin();		
		$this->form_validation->set_rules('provincesName',lang('require_provincesName'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('provinces_add');	
		} 
		else{
			if($this->provinces_model->addProvinces()){				
				redirect('admin/provinces/all');										
			} 		
			else{
				redirect('admin/provinces/add');
			}
		}
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$data = array();
		$data['id'] = $id;
		$data['page'] = $page;
		$data['provincesName'] = $this->input->post('provincesName');	
		$this->form_validation->set_rules('provincesName',lang('require_provincesName'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('provinces_edit',$data);	
		} 
		else{
			if($this->provinces_model->editProvinces($id)){				
				redirect('admin/provinces/all/'.$page);										
			} 		
			else{
				redirect('admin/provinces/edit');
			}
		}
	}
	function delete($id=0){
		checkLogin();
		$this->provinces_model->deleteProvinces($id);	
		redirect('admin/provinces/all');
	}
	
}
?>
