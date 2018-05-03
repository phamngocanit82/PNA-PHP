<?php
class About extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('about_model'); 
 	} 	
 	function About(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		About::add();		
	}	
	function add(){		
		checkLogin();
		$data = array();
		if($this->about_model->getTotalRows()>0){
			$id = $this->about_model->getIDAbout();
			$about = $this->about_model->getAbout($id); 
			$data['description'] = $about->description;	
		}
		else{
			$data['description'] = '';
		}		
		$this->layout->backPage('about_add',$data);							
	}
	function save(){
		if($this->about_model->getTotalRows()>0){
			$id = $this->about_model->getIDAbout();
			$this->about_model->editAbout($id);
		}
		else{			
			$this->about_model->addAbout();
		}
		redirect('admin/about');
	}	
}
?>
