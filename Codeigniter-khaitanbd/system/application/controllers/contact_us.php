<?php
class Contact_us extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('form_validation');
		$this->load->library('pagination');	
		$this->load->model('contact_us_model');
		$this->load->model('menu_model');
		$this->load->model('category_model');
		$this->load->model('product_model');
 	} 	
 	function Contact_us(){
 		$this->__construct(); 		
 	}	
	function index(){
		$data['menu'] = $this->menu_model->get_allmenu();
		$data['tab'] = 4;
		$data['name'] = '';
		$data['address'] = '';
		$data['homephone'] = '';
		$data['mobilephone'] = '';
		$data['email'] ='';
		$data['description'] = '';
		$this->layout->frontPage('contact_us',$data);
	}
	function add(){				
		$this->form_validation->set_rules('name','Name', 'required');
		if ($this->form_validation->run() == FALSE){
			$data['menu'] = $this->menu_model->get_allmenu();
			$data['tab'] = 4;
			$data['name'] = $this->input->post('name');
			$data['address'] = $this->input->post('address');
			$data['homephone'] = $this->input->post('homephone');
			$data['mobilephone'] = $this->input->post('mobilephone');
			$data['email'] = $this->input->post('email');
			$data['description'] = $this->input->post('description');
			$this->layout->frontPage('contact_us',$data);	
		} 
		else{
			$contact_us = new contact_us_model();
			$contact_us->name = $this->input->post('name');
			$contact_us->address = $this->input->post('address');
			$contact_us->homephone = $this->input->post('homephone');
			$contact_us->mobilephone = $this->input->post('mobilephone');
			$contact_us->email = $this->input->post('email');
			$contact_us->description = $this->input->post('description');
			$contact_us->add();
			redirect('contact_us');	
		}
	}
}
?>