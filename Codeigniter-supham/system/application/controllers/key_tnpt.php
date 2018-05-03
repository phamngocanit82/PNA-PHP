<?php
class Key_tnpt extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('key_tnpt_model'); 
 	} 	
 	function Key_tnpt(){
 		$this->__construct(); 		
 	}	
	function index(){		
		Key_tnpt::all();		
	}		
	function all($page=0){		
		$data = array();
		$data['page'] = $page;
		$data['key_tnpt'] = $this->key_tnpt_model->allKey_tnpt($page);
		$config = pagination(base_url().'key_tnpt/all', $this->key_tnpt_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('key_tnpt_all',$data);			
	}
	function view($id){		
		$data = array();		
		$data['key_tnpt'] = $this->key_tnpt_model->getKey_tnpt($id);
		$this->layout->frontPage('key_tnpt_view',$data);			
	}	 
}	 
?>
