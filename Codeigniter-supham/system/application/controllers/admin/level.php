<?php
class Level extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->library('pagination');		
 		$this->load->model('level_model');  		
 	} 	
 	function Level(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Level::add();		
	}	
	function add(){
		checkLogin();
		$this->layout->backPage('level_add');							
	}
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$level = $this->level_model->getLevel($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($level)
			$data['levelName'] = $level->name;
		else 	
			$data['levelName'] = '';
		$this->layout->backPage('level_edit',$data);							
	}
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['level'] = $this->level_model->allLevel($page);
		$config = pagination(base_url().'admin/level/all', $this->level_model->getTotalRows(), DEFAULT_LIMIT, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('level_all',$data);			
	}
	function save_add(){
		checkLogin();		
		$this->form_validation->set_rules('levelName',lang('require_levelName'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('level_add');	
		} 
		else{
			if($this->level_model->addLevel()){				
				redirect('admin/level/all');										
			} 		
			else{
				redirect('admin/level/add');
			}
		}
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$data = array();
		$data['id'] = $id;
		$data['page'] = $page;
		$data['levelName'] = $this->input->post('levelName');	
		$this->form_validation->set_rules('levelName',lang('require_levelName'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('level_edit',$data);	
		} 
		else{
			if($this->level_model->editLevel($id)){				
				redirect('admin/level/all/'.$page);										
			} 		
			else{
				redirect('admin/level/edit');
			}
		}
	}
	function delete($id=0){
		checkLogin();
		$this->level_model->deleteLevel($id);	
		redirect('admin/level/all');
	}
	
}
?>
