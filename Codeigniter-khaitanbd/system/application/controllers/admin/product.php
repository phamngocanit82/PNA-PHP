<?php
class Product extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		checkLogin();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->library('pagination');	
		$this->load->model('category_model');	
		$this->load->model('product_model');	
 	} 	
 	function Product(){
 		$this->__construct(); 		
 	}	
	function index($page = 0){	
		$this->all(0);
	}	
	function all($page = 0){	
		$data['category'] = $this->category_model->get_allcategory();
		$data['product'] = $this->product_model->get_product($page);
		$data['page'] = $page;
		$config = pagination(base_url().'admin/product/all', $this->product_model->get_total_rows(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->layout->backPage('product_all',$data);
	}	
	function discount($page = 0){	
		$data['category'] = $this->category_model->get_allcategory();
		$data['product'] = $this->product_model->get_product($page);
		$data['page'] = $page;
		$config = pagination(base_url().'admin/product/discount', $this->product_model->get_total_rows(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->layout->backPage('discount',$data);
	}
	function checkdiscount($page = 0, $id = 0, $check = 0){
		$data['product'] = $this->product_model->discount($id,$check);
		redirect('admin/product/discount/'.$page);
	}
	function promotion($page = 0){	
		$data['category'] = $this->category_model->get_allcategory();
		$data['product'] = $this->product_model->get_product($page);
		$data['page'] = $page;
		$config = pagination(base_url().'admin/product/promotion', $this->product_model->get_total_rows(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->layout->backPage('promotion',$data);
	}
	function checkpromotion($page = 0, $id = 0, $check = 0){
		$data['product'] = $this->product_model->promotion($id,$check);
		redirect('admin/product/promotion/'.$page);
	}
	function newproduct($page = 0){	
		$data['category'] = $this->category_model->get_allcategory();
		$data['product'] = $this->product_model->get_product($page);
		$data['page'] = $page;
		$config = pagination(base_url().'admin/product/newproduct', $this->product_model->get_total_rows(), NUM_RECORD_ON_PAGE, $page, 5);	
		$this->pagination->initialize($config);
		$this->layout->backPage('newproduct',$data);
	}
	function checknewproduct($page = 0, $id = 0, $check = 0){
		$data['product'] = $this->product_model->newproduct($id,$check);
		redirect('admin/product/newproduct/'.$page);
	}
	function add(){		
		$data['category'] = $this->category_model->get_allcategory();		
		$this->form_validation->set_rules('name',lang('product_name'), 'required');		
		if ($this->form_validation->run() == FALSE){	
			$data['idcategory'] = $this->input->post('idcategory');
			$data['name'] = $this->input->post('name');
			$data['code'] = $this->input->post('code');
			$data['quality'] = $this->input->post('quality');
			$data['description'] = $this->input->post('description');
			$data['price'] = $this->input->post('price');
			$data['lock'] = $this->input->post('lock');
			$this->layout->backPage('product_add',$data);	
			return;
		} 
		else{
			$product = new product_model();
			$product->idcategory = $this->input->post('idcategory');
			$product->image = Product::pictureUpload();
			$product->name = $this->input->post('name');
			$product->code = $this->input->post('code');
			$product->quality = $this->input->post('quality');
			$product->description = $this->input->post('description');
			$product->price = intval($this->input->post('price'));
			$product->flag_discounts = 0;
			$product->flag_promotions = 0;
			$product->flag_new = 0;
			$product->lock = ! $this->input->post('lock');
			
			if($product->image){
				$data['idcategory'] = $this->input->post('idcategory');
				$data['name'] = '';
				$data['code'] = '';
				$data['quality'] = '';
				$data['description'] = '';
				$data['price'] = '';
				$data['lock'] = '';
				$product->add();
			}
			else {
				$data['idcategory'] = $this->input->post('idcategory');
				$data['name'] = $this->input->post('name');
				$data['code'] = $this->input->post('code');
				$data['quality'] = $this->input->post('quality');
				$data['description'] = $this->input->post('description');
				$data['price'] = $this->input->post('price');
				$data['lock'] = $this->input->post('lock');
			}
				
			$this->layout->backPage('product_add',$data);	
		}
	}
	function delete($id = 0){
		$product = $this->product_model->get_productid($id);
		if($product){
			if( file_exists($product->image) )		 		
		 		unlink($product->image);
			$this->product_model->delete($id);
			redirect('admin/product');
		}
		else{
			redirect('admin/product/all');
		}
	}
	function edit($page = 0){
		$row = $this->product_model->get_product_id($this->input->post('id_edit'));
		if($row){
			$product = new product_model();
			$product->idcategory = $this->input->post('idcategory');
			$product->name = $this->input->post('name_edit');
			$product->code = $this->input->post('code_edit');
			$product->quality = $this->input->post('quality_edit');
			$product->description = $this->input->post('description_edit');
			$product->price = intval($this->input->post('price_edit'));
			$product->lock = ! $this->input->post('lock_edit');
			$product->edit($this->input->post('id_edit'));
		}
		redirect('admin/product/all/'.$page);
	}	
	function pictureUpload($picture='image_photo',$path = './images/product/' ){				
 		chmod('./images/product',0777);
		$config['upload_path'] =$path;
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= MAX_IMAGE_SIZE;	
		$this->load->library('upload', $config);		
		if( ! $this->upload->do_upload($picture)){
			return '' ;
		} 
		else{			
			return 'images/product/'.$this->upload->file_name;
		}		
	} 
	
}
?>