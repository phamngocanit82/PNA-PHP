<?php
class Districts extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->library('pagination');		
		$this->load->model('provinces_model');
 		$this->load->model('districts_model');  		
 	} 	
 	function Districts(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Districts::add();			
	}	
	function add(){
		checkLogin();
		$data = array();
		$data['provinces'] = $this->provinces_model->getAllProvinces();
		$this->layout->backPage('districts_add',$data);							
	}
	function edit($id=0,$page){
		checkLogin();
		$data = array();
		$districts = $this->districts_model->getDistricts($id); 
		$data['id'] = $id;
		$data['page'] = $page;		
		if($districts)
			$data['districtsName'] = $districts->name;
		else 	
			$data['districtsName'] = '';
		$this->layout->backPage('districts_edit',$data);							
	}
	function all($page = 0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['districts'] = $this->districts_model->allDistricts($page);
		$config = pagination(base_url().'admin/districts/all', $this->districts_model->getTotalRows(), DEFAULT_LIMIT, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('districts_all',$data);			
	}
	function save_add(){
		checkLogin();		
		$data = array();
		$data['provinces'] = $this->provinces_model->getAllProvinces();
		$this->form_validation->set_rules('districtsName',lang('require_districtsName'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('districts_add',$data);	
		} 
		else{
			if($this->districts_model->addDistricts()){				
				redirect('admin/districts/all');										
			} 		
			else{
				redirect('admin/districts/add');
			}
		}
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$data = array();
		$data['id'] = $id;
		$data['page'] = $page;
		$data['districtsName'] = $this->input->post('districtsName');	
		$data['provinces'] = $this->provinces_model->getAllProvinces();
		$this->form_validation->set_rules('districtsName',lang('require_districtsName'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('districts_edit',$data);	
		} 
		else{
			if($this->districts_model->editDistricts($id)){				
				redirect('admin/districts/all/'.$page);										
			} 		
			else{
				redirect('admin/districts/edit');
			}
		}
	}
	function delete($id=0){
		checkLogin();
		$this->districts_model->deleteDistricts($id);	
		redirect('admin/districts/all');
	}
	
}
?>
