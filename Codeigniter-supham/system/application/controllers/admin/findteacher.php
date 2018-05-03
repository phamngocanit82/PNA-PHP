<?php
class Findteacher extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('pagination');
		$this->load->library('validation');
		$this->load->library('form_validation');	
		$this->load->model('provinces_model');
		$this->load->model('districts_model');		
		$this->load->model('school_model');
		$this->load->model('level_model');
		$this->load->model('findteacher_model');
 	} 	
 	function Findteacher(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Findteacher::all();			
	}	
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$data['findteacher'] = $this->findteacher_model->getFindteacherAdmin($id);						
		$data['provinces'] = $this->provinces_model->getAllProvinces();				
		$data['districts'] = $this->districts_model->getGroupProvinces($data['findteacher']->id_provinces);
		$data['level'] = $this->level_model->getAllLevel();
		$data['school'] = $this->school_model->getAllSchool();
		$data['id'] = $id;		
		$data['page'] = $page;
		$this->layout->backPage('register_find_teacher',$data);							
	}
	function save_edit($id,$page){		
		$this->findteacher_model->editFindteacher($id);
		redirect('admin/findteacher/all/'.$page);				
	}
	function all($page=0){
		checkLogin();
		$data = array();	
		$data['page'] = $page;
		$data['findteacher'] = $this->findteacher_model->allFindteacherAdmin($page);		
		$config = pagination(base_url().'admin/findteacher/all', $this->findteacher_model->getTotalRowsAdmin(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('find_teacher_all',$data);
	}
	function view($id=0,$page=0){	
		checkLogin();
		$data = array();		
		$data['page'] = $page;
		$data['findteacher'] = $this->findteacher_model->getFindteacherAdmin($id);
		$this->layout->backPage('find_teacher_view',$data);			
	}
	function display($id=0,$page=0,$lock=0){
		checkLogin();	
		$data = array();
		$data['id'] = $id;
		$data['page'] = $page;
		$this->findteacher_model->editLock($id,$lock);				
		redirect('admin/findteacher/all/'.$page);
	}
	function status($id=0,$page=0,$status=0){
		checkLogin();	
		$data = array();
		$data['id'] = $id;
		$data['page'] = $page;
		$this->findteacher_model->editStatus($id,$status);				
		redirect('admin/findteacher/all/'.$page);
	}
	function delete($id=0){
		checkLogin();
		$this->findteacher_model->deleteFindteacher($id);	
		redirect('admin/findteacher/all');
	}
}
?>
