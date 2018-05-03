<?php
class Category extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		checkLogin();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->library('pagination');	
		$this->load->model('menu_model');	
		$this->load->model('category_model');
		$this->load->model('product_model');
 	} 	
 	function Category(){
 		$this->__construct(); 		
 	}	
	function index(){	
		$this->all(0);
	}	
	function all($page = 0){		
		$data['menu'] = $this->menu_model->get_allmenu();
		$data['category'] = $this->category_model->get_category($page);
		$data['page'] = $page;
		$data['name'] = '';
		$data['code'] = '';
		$data['lock'] = '1';
		$config = pagination(base_url().'admin/category/all', $this->category_model->get_total_rows(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->layout->backPage('category_all',$data);
	}	
	function add($page = 0){		
		$data['menu'] = $this->menu_model->get_menu($page);
		$data['category'] = $this->category_model->get_category($page);
		$data['page'] = $page;
		$config = pagination(base_url().'admin/category/all', $this->category_model->get_total_rows(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);		
		$this->form_validation->set_rules('name',lang('category_name'), 'required');		
		if ($this->form_validation->run() == FALSE){	
			$data['name'] = $this->input->post('name');
			$data['code'] = $this->input->post('code');
			$data['lock'] = $this->input->post('lock');
			$this->layout->backPage('category_add',$data);	
			return;
		} 
		else{
			$category = new category_model();
			$category->idmenu = $this->input->post('menu');
			$category->name = $this->input->post('name');
			$category->code = $this->input->post('code');
			$category->lock = ! $this->input->post('lock');
			$category->add();
			redirect('admin/category/add');	
		}
	}
	function delete($id = 0){
		$idcategory = $this->product_model->get_idcategory($id);
		if(!$idcategory){
			$this->category_model->delete($id);
			redirect('admin/category');
		}
		else{
			redirect('admin/category/all');
		}
	}
	function edit($page = 0){
		$row = $this->category_model->get_category_id($this->input->post('id_edit'));
		if($row&&trim($this->input->post('name_edit'))){
			$category = new category_model();
			$category->idmenu = $this->input->post('menu');
			$category->name = $this->input->post('name_edit');
			$category->code = $this->input->post('code_edit');
			$category->lock = ! $this->input->post('lock_edit');
			$category->edit($this->input->post('id_edit'));
		}
		redirect('admin/category/all/'.$page);
	}
	
}
?>