<?php
class Contact_us extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		checkLogin();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->library('pagination');	
		$this->load->model('contact_us_model');
 	} 	
 	function Contact_us(){
 		$this->__construct(); 	 			
 	}	
	function index(){	
		$this->all(0);
	}		
	function all($page = 0){		
		$data['contact_us'] = $this->contact_us_model->get_contact_us($page);
		$data['page'] = $page;
		$config = pagination(base_url().'admin/contact_us/all', $this->contact_us_model->get_total_rows(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->layout->backPage('contact_us',$data);
	}		
	function delete($id = 0){
		$this->contact_us_model->delete($id);
		redirect('admin/contact_us');
	}	
}
?>