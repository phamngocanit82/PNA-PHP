<?php
class About_us extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		checkLogin();
		$this->load->library('form_validation');
		$this->load->model('about_us_model');	
 	} 	
 	function About_us(){
 		$this->__construct(); 
 				
 	}	
	function index(){		
		
		About_us::add();
	}
	function add(){		
		checkLogin();
		$data = array();
		if($this->about_us_model->getTotalRows()>0){
			$id = $this->about_us_model->getIDAbout();
			$about = $this->about_us_model->getAbout($id); 
			$data['title'] = $about->title;
			$data['description'] = $about->description;	
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
		}		
		$this->layout->backPage('about_us_add',$data);							
	}
	function save(){
		if($this->about_us_model->getTotalRows()>0){
			$id = $this->about_us_model->getIDAbout();
			$this->about_us_model->editAbout($id);
		}
		else{			
			$this->about_us_model->addAbout();
		}
		redirect('admin/about_us');
	}			
}
?>