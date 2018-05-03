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
		About::view();	
	}	
	function view(){		
		$data = array();		
		$id = $this->about_model->getIDAbout();
		$data['about'] = $this->about_model->getAbout($id);
		$this->layout->frontPage('about_view',$data);			
	}	
}
?>
