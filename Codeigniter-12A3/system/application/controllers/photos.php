<?php
class Photos extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('pagination');	
		$this->load->model('photos_model');
		$this->load->model('photos_group_model');		
 	} 	
 	function Photos(){
 		$this->__construct(); 		
 	}	
	function index($page=0){
		$data = array();
		$data['tab'] = 3;
		$data['photos_group'] = $this->photos_group_model->All();
		$data['photos'] = $this->photos_model->getAll($page);
		$config = pagination(base_url().'photos/index', $this->photos_model->getTotalRows(), DEFAULT_LIMIT, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('photos',$data);
	}	
}
?>
