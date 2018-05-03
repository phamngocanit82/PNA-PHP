<?php
class Key_tsdh extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('key_tsdh_model'); 
 	} 	
 	function Key_tsdh(){
 		$this->__construct(); 		
 	}	
	function index(){		
		Key_tsdh::all();		
	}		
	function all($page=0){		
		$data = array();
		$data['page'] = $page;
		$data['key_tsdh'] = $this->key_tsdh_model->allKey_tsdh($page);
		$config = pagination(base_url().'key_tsdh/all', $this->key_tsdh_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('key_tsdh_all',$data);			
	}
	function view($id){		
		$data = array();		
		$data['key_tsdh'] = $this->key_tsdh_model->getKey_tsdh($id);
		$this->layout->frontPage('key_tsdh_view',$data);			
	}	 
}	 
?>
