<?php
class Product extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->model('product_model');
		$this->load->model('menu_model');
		$this->load->model('category_model');
 	} 	
 	function Product(){
 		$this->__construct(); 		
 	}	
	function index(){
		$data['menu'] = $this->menu_model->get_allmenu();
		$data['tab'] = 1;
		$this->layout->frontPage('product',$data);
	}	
}
?>
