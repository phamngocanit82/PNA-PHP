<?php
class Contact extends Controller {
	function __construct(){
 		parent::Controller();
 		changeLanguage();
 		$this->load->library('pagination');
		$this->load->library('validation');
		$this->load->library('form_validation');		
		$this->load->model('contact_model');		
 	} 	
 	function Contact(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Contact::all();
	}	
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;		
		$data['contact'] = $this->contact_model->allContact($page);
		$config = pagination(base_url().'admin/contact/all', $this->contact_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('contact_all',$data);
	}	
	function delete($id=0){
		checkLogin();
		$this->contact_model->deleteContact($id);	
		redirect('admin/contact');
	}
}	
?>
