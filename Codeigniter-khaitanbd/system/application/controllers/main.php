<?php
class Main extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('pagination');	
		$this->load->model('menu_model');
		$this->load->model('category_model');
		$this->load->model('product_model');
		$this->load->model('logo_model');
 	} 	
 	function Main(){
 		$this->__construct(); 		
 	}	
	function index(){
		$this->all(0);
	}	
	function all($page = 0){	
		$data['menu'] = $this->menu_model->get_allmenu();
		$data['tab'] = 0;
		
		$data['productmain'] = $this->product_model->get_productmain($page);
		$data['page'] = $page;
		$config = pagination(base_url().'main/all', $this->product_model->get_total_rowsmain(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->layout->frontPage('main',$data);
	}
	function category($id=0,$page = 0){	
		$data['menu'] = $this->menu_model->get_allmenu();
		$data['tab'] = 0;
		
		$data['id'] = $id;
		$data['product'] = $this->product_model->get_productcategory($id,$page);
		$data['page'] = $page;
		$config = pagination(base_url().'main/main/category/'.$id, $this->product_model->get_total_rowscategory($id), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->layout->frontPage('main_category',$data);
	}
}
?>
