<?php
class Menu extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		checkLogin();	
		$this->load->library('form_validation');
		$this->load->library('pagination');		
		$this->load->model('menu_model');
		$this->load->model('category_model');
		$this->load->model('product_model');
 	} 	
 	function Menu(){
 		$this->__construct(); 		
 	}	
	function index(){	
		$this->all(0);
	}	
	function all($page = 0){		
		$data['menu'] = $this->menu_model->get_menu($page);
		$data['page'] = $page;
		$config = pagination(base_url().'admin/menu/all', $this->menu_model->get_total_rows(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->layout->backPage('menu_all',$data);
	}	
	function add($page = 0){
		$data['menu'] = $this->menu_model->get_menu($page);
		$data['page'] = $page;
		$config = pagination(base_url().'admin/menu/add', $this->menu_model->get_total_rows(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->form_validation->set_rules('name','Menu name', 'required');
		if ($this->form_validation->run() == FALSE){	
			$data['name'] = '';
			$this->layout->backPage('menu_add',$data);	
		} 
		else{
			$menu = new menu_model();
			$menu->name = $this->input->post('name');
			$menu->add();
			redirect('admin/menu/add');	
		}
	}
	function delete($id = 0){
		$idmenu = $this->category_model->get_idmenu($id);
		if(!$idmenu){
			$idmenu = $this->product_model->get_idmenu($id);
			if(!$idmenu){
				$this->menu_model->delete($id);
				redirect('admin/menu');
			}
			else{
				redirect('admin/menu/all');
			}
		}
		else{
			redirect('admin/menu/all');
		}
	}
	function edit($page = 0){
		$row = $this->menu_model->get_menu_id($this->input->post('id_edit'));
		if($row&&trim($this->input->post('name_edit'))){
			$menu = new menu_model();
			$menu->name = $this->input->post('name_edit');
			$menu->edit($this->input->post('id_edit'));
		}
		redirect('admin/menu/all/'.$page);
	}
	
}
?>