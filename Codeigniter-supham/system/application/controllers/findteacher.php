<?php
class Findteacher extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('pagination');
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('provinces_model');
		$this->load->model('districts_model');		
		$this->load->model('school_model');
		$this->load->model('level_model');
		$this->load->model('findteacher_model');
		
		$this->load->library('xajax', array('uri'=>'register'));
		$this->xajax->registerFunction(array('changeProvinces', &$this, 'changeProvinces')); 			 		
 		$this->xajax->processRequest();	
 	} 	
 	function Findteacher(){
 		$this->__construct(); 		
 	}	
	function index(){		
		Findteacher::add();			
	}
	function add(){		
		$data = array();
		$id_provinces = $this->input->post('id_provinces');
		$provinces = $this->provinces_model->getAllProvinces();
		if($provinces && !$id_provinces)
			$id_provinces = $provinces[0]->id;
		else
			if(!$id_provinces) $id_provinces = 0;		
		$gender = $this->input->post('gender');
		if(!$gender) $gender = 0;
		$type = $this->input->post('type');
		if(!$type) $type = 0;
		
		$this->form_validation->set_rules('address',"(*)", 'required');
		$this->form_validation->set_rules('email',"(*)", 'required|valid_email');
		$this->form_validation->set_rules('contact',"(*)", 'required');
		$this->form_validation->set_rules('subjects',"(*)", 'required');
		$this->form_validation->set_rules('quantity_students',"(*)", 'required');
		$this->form_validation->set_rules('salary',"(*)", 'required');
		$this->form_validation->set_error_delimiters("<span style='color:#FF0000'>","</span>");
		
		$data['provinces'] = $provinces;
		$data['districts'] = $this->districts_model->getGroupProvinces($id_provinces);
		$data['telephone'] = $this->input->post('telephone');
		$data['mobilephone'] = $this->input->post('mobilephone');		
		$data['level'] = $this->level_model->getAllLevel();
		$data['type'] = $type;
		$data['gender'] = $gender;
		$data['school'] = $this->school_model->getAllSchool();
		$data['description'] = $this->input->post('description');
		if($this->form_validation->run() == FALSE){
			$this->layout->frontPage('register_find_teacher',$data);	
 		}
		else{			
			$this->findteacher_model->addFindteacher();
			redirect('main/successful');
		}						
	}
	function all($page=0){
		$data = array();
		$data['xajax_js'] = $this->xajax->getJavascript(base_url()."javascript/");	
		
		$id_provinces = $this->input->post('id_provinces');
		$provinces = $this->provinces_model->getAllProvinces();
		if($provinces && !$id_provinces)
			$id_provinces = $provinces[0]->id;
		else
			if(!$id_provinces) $id_provinces = 0;
		
		$data['page'] = $page;
		$data['provinces'] = $provinces;
		$data['districts'] = $this->districts_model->getGroupProvinces($id_provinces);
		$data['level'] = $this->level_model->getAllLevel();		
		$data['findteacher'] = $this->findteacher_model->allFindteacher($page);		
		$data['max_rows'] = $this->findteacher_model->getTotalRows();
		$config = pagination(base_url().'findteacher/all', $data['max_rows'], DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('find_teacher_all',$data);
	}
	function view($id){		
		$data = array();		
		$data['findteacher'] = $this->findteacher_model->getFindteacher($id);
		$this->layout->frontPage('find_teacher_view',$data);			
	}
	function searchall($page=0){
		$data = array();		
		$data['xajax_js'] = $this->xajax->getJavascript(base_url()."javascript/");	
		$data['page'] = $page;
		$id_provinces = $this->input->post('id_provinces');
		$data['id_districts'] = $this->input->post('id_districts');	
		$id_level_to = $this->input->post('id_level_to');
		$id_level_from = $this->input->post('id_level_from');
			
		$provinces = $this->provinces_model->getAllProvinces();						
		$data['provinces'] = $provinces;
		$data['districts'] = $this->districts_model->getGroupProvinces($id_provinces);		
		
		$data['level'] = $this->level_model->getAllLevel();		
		$data['findteacher'] = $this->findteacher_model->searchAllFindteacher($page);	
		$data['max_rows'] = $this->findteacher_model->searchAllgetTotalRows();	
		
		$config = pagination(base_url().'findteacher/searchallIndex/'.$id_provinces.'/'.$data['id_districts'].'/'.$id_level_to.'/'.$id_level_from, $data['max_rows'], DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('find_teacher_searchall',$data);
	}
	function searchallIndex($id_provinces=0,$id_districts=0,$id_level_to=0,$id_level_from=0,$page=0){
		$data = array();		
		$data['xajax_js'] = $this->xajax->getJavascript(base_url()."javascript/");	
		$data['page'] = $page;		
		$data['id_districts'] = $id_districts;	
		$data['id_level_to'] = $id_level_to;
		$data['id_level_from'] = $id_level_from;	
		$provinces = $this->provinces_model->getAllProvinces();						
		$data['provinces'] = $provinces;
		$data['districts'] = $this->districts_model->getGroupProvinces($id_provinces);		
		
		$data['level'] = $this->level_model->getAllLevel();		
		$data['findteacher'] = $this->findteacher_model->searchAllIndexFindteacher($page,$id_provinces,$id_districts,$id_level_to,$id_level_from);	
		$data['max_rows'] = $this->findteacher_model->searchAllIndexgetTotalRows($id_provinces,$id_districts,$id_level_to,$id_level_from);	
		$config = pagination(base_url().'findteacher/searchallIndex/'.$id_provinces.'/'.$data['id_districts'].'/'.$id_level_to.'/'.$id_level_from, $data['max_rows'], DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('find_teacher_searchall',$data);
	}
	function changeProvinces($id_provinces){ 	
 		$objResponse = new xajaxResponse();
 		$districts = $this->districts_model->getGroupProvinces($id_provinces);
 		$s="";
		$s = $s. '<select id="id_districts" name ="id_districts">';
		$s = $s.'<option value="0">Tất cả</option>';
 		if($districts){    	      				
			for($i=0; $i<count($districts); $i++){
		    	$row = $districts[$i];
		    	$s = $s.'<option value="'.$row->id.'">'.$row->name.'</option>' ;
			}
 		}
		$s= $s.'</select>&nbsp;';	
		$objResponse->assign("abc","innerHTML", $s);
    	return $objResponse; 		
 	}
}
?>
