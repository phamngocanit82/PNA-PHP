<?php
class Register extends Controller {
	function __construct(){
 		parent::Controller();
 		changeLanguage();
 		$this->load->library('pagination');
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('provinces_model');
		$this->load->model('districts_model');
		$this->load->model('diploma_model');
		$this->load->model('school_model');
		$this->load->model('level_model');
		$this->load->model('register_model');
		$this->load->model('register02_model');	
		
		$this->load->library('xajax', array('uri'=>'register'));
		$this->xajax->registerFunction(array('changeProvinces', &$this, 'changeProvinces')); 			 		
 		$this->xajax->processRequest();	
 	} 	
 	function Register(){
 		$this->__construct(); 		
 	}	
	function index(){
		Register::add();
	}
	function login(){
		$this->form_validation->set_rules('email',"(*)", 'required|valid_email');
		$this->form_validation->set_rules('password',"(*)", 'required');
		$this->form_validation->set_error_delimiters("<span style='color:#FF0000'>","</span>");		
		if($this->form_validation->run() == FALSE){
			redirect('main');	
 		}
		else{
			$user = $this->register_model->login();
			if(!$user)
			{
				redirect('main');	
			}
			else{
				$newdata = array('user' => $user);
				$this->session->set_userdata($newdata);  
				redirect('register/all');
			}				
		}				
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
		
		$this->form_validation->set_rules('email',"(*)", 'required|valid_email');
		$this->form_validation->set_rules('password',"(*)", 'required|matches[confirmpassword]');
		$this->form_validation->set_rules('confirmpassword',"(*)", 'required');
		$this->form_validation->set_rules('registerName',"(*)", 'required');
		$this->form_validation->set_rules('address',"(*)", 'required');
		$this->form_validation->set_rules('subjects',"(*)", 'required');
		$this->form_validation->set_rules('area_teach',"(*)", 'required');
		$this->form_validation->set_rules('time_teach',"(*)", 'required');
		$this->form_validation->set_rules('salary',"(*)", 'required');
		$this->form_validation->set_error_delimiters("<span style='color:#FF0000'>","</span>");
		$data['check_email'] = null;
		$data['birthday'] = $this->input->post('birthday');
		$data['gender'] = $gender;
		$data['provinces'] = $provinces;
		$data['districts'] = $this->districts_model->getGroupProvinces($id_provinces);
		$data['telephone'] = $this->input->post('telephone');
		$data['mobilephone'] = $this->input->post('mobilephone');
		$data['diploma'] = $this->diploma_model->getAllDiploma();
		$data['school'] = $this->school_model->getAllSchool();
		$data['specialized'] = $this->input->post('specialized');
		$data['graduate'] = $this->input->post('graduate');
		$data['type'] = $type;
		$data['level'] = $this->level_model->getAllLevel();
		$data['description'] = $this->input->post('description');
		if($this->form_validation->run() == FALSE){
			$this->layout->frontPage('register_member',$data);	
 		}
		else{
			$data['check_email'] = $this->register_model->checkEmail($this->input->post('email'));					
			if(!$data['check_email']){
				$avatar = Register::registerUpload();				
				$this->register_model->addRegister($avatar);
				$this->register02_model->addRegister02($avatar);
				$user = $this->register_model->login();
				$newdata = array('user' => $user);
				$this->session->set_userdata($newdata);  
				redirect('main/successful');
			}
			else 
				$this->layout->frontPage('register_member',$data);
		}
	}
	function person_infor(){
		if(!$this->session->userdata('user')){
			redirect('main');
			return;
		}
		$data = array();
		$data['xajax_js'] = $this->xajax->getJavascript(base_url()."javascript/");	
		$data['provinces'] = $this->provinces_model->getAllProvinces();
		$data['districts'] = $this->districts_model->getGroupProvinces($this->session->userdata('user')->id_provinces);
		$data['diploma'] = $this->diploma_model->getAllDiploma();
		$data['school'] = $this->school_model->getAllSchool();
		$data['level'] = $this->level_model->getAllLevel();
		$data['placeofbirth'] = $this->session->userdata('user')->placeofbirth; 
		$data['id_provinces'] = $this->session->userdata('user')->id_provinces; 
		$data['id_districts'] = $this->session->userdata('user')->id_districts; 
		$data['id_diploma'] = $this->session->userdata('user')->id_diploma; 
		$data['id_school'] = $this->session->userdata('user')->id_school; 
		$data['id_level_from'] = $this->session->userdata('user')->id_level_from;
		$data['id_level_to'] = $this->session->userdata('user')->id_level_to;
		$data['user'] = $this->session->userdata('user'); 
		$this->layout->frontPage('person_infor',$data);
	}
	function save_person_infor(){	
		if(!$this->session->userdata('user')){
			redirect('main');
			return;
		}	
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
		
		$this->form_validation->set_rules('oldpassword',"(*)", 'required');
		$this->form_validation->set_rules('newpassword',"(*)", 'required|matches[confirmpassword]');
		$this->form_validation->set_rules('confirmpassword',"(*)", 'required');
		$this->form_validation->set_rules('registerName',"(*)", 'required');
		$this->form_validation->set_rules('address',"(*)", 'required');
		$this->form_validation->set_rules('subjects',"(*)", 'required');
		$this->form_validation->set_rules('area_teach',"(*)", 'required');
		$this->form_validation->set_rules('time_teach',"(*)", 'required');
		$this->form_validation->set_rules('salary',"(*)", 'required');
		$this->form_validation->set_error_delimiters("<span style='color:#FF0000'>","</span>");
		$data['xajax_js'] = $this->xajax->getJavascript(base_url()."javascript/");	
		$data['check_email'] = null;
		$data['birthday'] = $this->input->post('birthday');
		$data['gender'] = $gender;
		$data['provinces'] = $provinces;
		$data['districts'] = $this->districts_model->getGroupProvinces($id_provinces);
		$data['telephone'] = $this->input->post('telephone');
		$data['mobilephone'] = $this->input->post('mobilephone');
		$data['diploma'] = $this->diploma_model->getAllDiploma();
		$data['school'] = $this->school_model->getAllSchool();
		$data['specialized'] = $this->input->post('specialized');
		$data['graduate'] = $this->input->post('graduate');
		$data['type'] = $type;
		$data['level'] = $this->level_model->getAllLevel();
		$data['description'] = $this->input->post('description');
		if($this->form_validation->run() == FALSE){			
			$this->layout->frontPage('save_person_infor',$data);	
 		}
		else{
			$data['check_password'] = $this->register_model->checkPassword(md5($this->input->post('oldpassword')));					
			if($data['check_password']){
				$register = $this->register_model->getRegisterLogin($this->session->userdata('user')->id); 
				if($register->avatar)
					$avatar = $register->avatar;
				else 
					$avatar = Register::registerUpload();	
				$this->register_model->editRegister($avatar);
				if( $this->session->userdata('user')->permission==0)
					$this->register02_model->changeInforRegister02($avatar);
				$id = $this->session->userdata('user')->id;
				$this->session->sess_destroy();
				$user = $this->register_model->reLogin($id);				
				$newdata = array('user' => $user);
				$this->session->set_userdata($newdata); 
				
				redirect('main/successful');			
			}
			else 
				$this->layout->frontPage('save_person_infor',$data);
		}
	}
	function delete_image($id){
		if(!$this->session->userdata('user')){
			redirect('main');
			return;
		}
		$register = $this->register_model->getRegister($id);
		if($register->avatar){
			if( file_exists('avatar/'.$register->avatar) )		 		
		 		unlink('avatar/'.$register->avatar);	
		}
		$this->register_model->editAvatarRegister();
		$this->register02_model->editAvatarRegister02();
		$user = $this->register_model->reLogin($this->session->userdata('user')->id);
		$this->session->sess_destroy();
		$newdata = array('user' => $user);
		$this->session->set_userdata($newdata); 
		redirect('register/save_person_infor');
	}
	function all($page=0){
		$data = array();
		$data['page'] = $page;
		$data['school'] = $this->school_model->getAllSchool();
		$data['level'] = $this->level_model->getAllLevel();
		$data['register'] = $this->register02_model->allRegister02($page);
		$data['max_rows'] = $this->register02_model->getTotalRows();
		$config = pagination(base_url().'register/all', $data['max_rows'], DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('register_remember_all',$data);
	}
	function searchall($page=0){
		$data = array();
		$data['page'] = $page;
		
		$data['school'] = $this->school_model->getAllSchool();
		$data['level'] = $this->level_model->getAllLevel();
		
		$data['type'] = $this->input->post('type');
		$data['id_school'] = $this->input->post('id_school');
		$data['gender'] = $this->input->post('gender');
		$data['id_level'] = $this->input->post('id_level');
		
		$data['register'] = $this->register02_model->searchAllRegister02($page);
		$data['max_rows'] = $this->register02_model->searchAllgetTotalRows();
		$config = pagination(base_url().'register/searchallIndex/'.$data['type'].'/'.$data['id_school'].'/'.$data['gender'].'/'.$data['id_level'], $data['max_rows'], DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('register_remember_searchall',$data);
	}
	function searchallIndex($type=0,$id_school=0,$gender=0,$id_level=0,$page=0){
		$data = array();
		$data['page'] = $page;
		
		$data['school'] = $this->school_model->getAllSchool();
		$data['level'] = $this->level_model->getAllLevel();
		
		$data['type'] = $this->input->post('type');
		$data['id_school'] = $id_school;
		$data['gender'] = $gender;
		$data['id_level'] = $id_level;
		
		$data['register'] = $this->register02_model->searchAllIndexRegister02($page,$type,$id_school,$gender,$id_level);
		$data['max_rows'] = $this->register02_model->searchAllIndexgetTotalRows($type,$id_school,$gender,$id_level);
		$config = pagination(base_url().'register/searchallIndex/'.$type.'/'.$id_school.'/'.$gender.'/'.$id_level, $data['max_rows'], DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('register_remember_searchall',$data);
	}
	
	function view($id){		
		$data = array();		
		$data['register'] = $this->register02_model->getRegister02($id);
		$this->layout->frontPage('register_remember_view',$data);			
	}
	function registerUpload($path = './avatar/' ){				
 		chmod('./avatar',0777);
		$config['upload_path'] =$path;
		$config['allowed_types'] = 'gif|jpg|png|bmp';
		$config['max_size']	= MAX_IMAGE_SIZE;	
		$this->load->library('upload', $config);		
		if( ! $this->upload->do_upload('avatar')){				
			return '' ;
		} 
		else{			
			return $this->upload->file_name;
		}		
	} 
	function forgotpass(){
		$data = array();	
		$this->form_validation->set_rules('email',"(*)", 'required|valid_email');
		if($this->form_validation->run()){
			$msg = '';
			$to = trim($this->input->post('email'));
			$new_password = $this->register_model->reset_password();			
			$config['smtp_host']	= 'supham.com.vn';
			$config['smtp_user']	= 'supham';
			$config['smtp_pass']	= '2410574545';				
			$this->load->library('email');
			$this->load->helper('string');
	        $this->load->helper('email');
	        $this->email->initialize($config); 		 			
	 		$this->email->from('supham@supham.com.vn','supham@supham.com.vn'); 		 				 		
	 		$this->email->to($to);
	 		$msg .= 'Chào '.$to.',';
	 		$msg .= "\n\nChúng tôi đã đổi mật khẩu mới theo yêu cầu của bạn. Thông tin bên dưới là mật khẩu mới của bạn.";
	 		$msg .= "\n\nMật khẩu mới: ". $new_password ."\n \n Nhấn vào đây để đăng nhập: ".base_url();
	 		$msg .= "\n\nCám ơn bạn đã sử dụng dịch vụ của chúng tôi"; 		
	 		$msg .= "\n\n===================================";
	 		$msg .= "\nThông tin đóng góp ý kiến gửi về "; 			
	 		$msg .= "\nEmail: supham@supham.com.vn"; 				 		
	 		$msg .= "\n===================================";
	 		$this->email->subject('[supham.com.vn] Mat khau moi - New password'); 			
	 		$this->email->message($msg);
	 		$this->email->send();	
	 		$this->layout->frontPage('send_successfull');
		}
		$this->layout->frontPage('forgotpass',$data);
	}
	function sendmail(){		
		$this->form_validation->set_rules('youremail',"(*)", 'required|valid_email');
		$this->form_validation->set_rules('receiveremail',"(*)", 'required|valid_email');
		if($this->form_validation->run()){
			$msg = '';
			$to = trim($this->input->post('receiveremail'));				
			$config['smtp_host']	= 'supham.com.vn';
			$config['smtp_user']	= 'supham';
			$config['smtp_pass']	= '2410574545';				
			$this->load->library('email');
			$this->load->helper('string');
	        $this->load->helper('email');
	        $this->email->initialize($config); 		 			
	 		$this->email->from('supham@supham.com.vn',$this->input->post('youremail')); 		 				 		
	 		$this->email->to($to);
	 		$msg .= 'Chào '.$this->input->post('receiveremail').',';
	 		$msg .= "\n\nĐể xem thông tin, nhấn vào đây : ".base_url(); 			
	 		$msg .= "\n\nCám ơn bạn đã sử dụng dịch vụ của chúng tôi"; 		
	 		$msg .= "\n\n";
	 		$msg .= "\n\n===================================";
	 		$msg .= "\nThông tin đóng góp ý kiến gửi về "; 			
	 		$msg .= "\nEmail: supham@supham.com.vn"; 				 		
	 		$msg .= "\n===================================";
	 		$this->email->subject('Thư từ '.$this->input->post('yourname')); 			
	 		$this->email->message($msg);
	 		$this->email->send();	
	 		redirect('main/successful');
		}
 		redirect('main');
	}	
	function logout(){
		$this->session->sess_destroy();
		redirect('main');		
	}
	function changeProvinces($id_provinces){ 	
 		$objResponse = new xajaxResponse();
 		$districts = $this->districts_model->getGroupProvinces($id_provinces);
 		$s="";
		$s = $s. '<select id="id_districts" name ="id_districts">';
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
