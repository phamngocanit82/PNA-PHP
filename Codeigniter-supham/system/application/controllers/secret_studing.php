<?php
class Secret_studing extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('secret_studing_model'); 
 	} 	
 	function Secret_studing(){
 		$this->__construct(); 		
 	}	
	function index(){		
		Secret_studing::all();		
	}		
	function all($page=0){		
		$data = array();
		$data['page'] = $page;
		$data['secret_studing'] = $this->secret_studing_model->allSecret_studing($page);
		$config = pagination(base_url().'secret_studing/all', $this->secret_studing_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('secret_studing_all',$data);			
	}
	function view($id){		
		$data = array();		
		$data['secret_studing'] = $this->secret_studing_model->getSecret_studing($id);
		$this->layout->frontPage('secret_studing_view',$data);			
	}	 
}	 
?>
