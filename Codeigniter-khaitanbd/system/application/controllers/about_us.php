<?php
class About_us extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->model('about_us_model');
		$this->load->model('menu_model');
		$this->load->model('category_model');
		$this->load->model('product_model');
 	} 	
 	function About_us(){
 		$this->__construct(); 		
 	}	
	function index(){
		$data['menu'] = $this->menu_model->get_allmenu();
		$data['about_us'] = $this->about_us_model->get_allabout();
		$data['tab'] = 3;
		$this->layout->frontPage('about_us',$data);
	}	
}
?>