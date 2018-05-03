<?php
class Main extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('user_model');
 	} 	
 	function Main(){
 		$this->__construct(); 		
 	}	
	function index(){
		$data = array();
		$data['tab'] = 0;
		$this->layout->frontPage('comments',$data);
	}	
	function register(){		
		$data = array();
		$data['tab'] = 0;
		$gender = $this->input->post('gender');
		if(!$gender) $gender = 0;
		$data['gender'] = $gender;
		$data['check_email'] = '';
		$this->layout->frontPage('register',$data);
	}		
	function register_save(){
		$data = array();
		$data['tab'] = 0;
		$data['check_email'] = '';
		$gender = $this->input->post('gender');
		if(!$gender) $gender = 0;
		$data['gender'] = $gender;
		$this->form_validation->set_rules('nickname',"(*)", 'required');
		$this->form_validation->set_rules('email',"(*)", 'required|valid_email');		
		$this->form_validation->set_rules('password',"(*)", 'required|matches[confirmpassword]');
		$this->form_validation->set_rules('confirmpassword',"(*)", 'required');
		$this->form_validation->set_rules('fullname',"(*)", 'required');
		$this->form_validation->set_error_delimiters("<span style='color:#FF0000'>&nbsp;","</span>");
		if($this->form_validation->run() == FALSE){
			$this->layout->frontPage('register',$data);
 		}
 		else{
 			$data['check_email'] = $this->user_model->check_email($this->input->post('email'));					
			if(!$data['check_email']){
				$avatar = Main::uploadfile();				
				$this->user_model->add($avatar);
				$user = $this->user_model->login();
				$newdata = array('user' => $user);
				$this->session->set_userdata($newdata);  
				$this->layout->frontPage('successful',$data);
			}
			else{ 
				$data['check_email'] = 'This email already in use';
				$this->layout->frontPage('register',$data);
			}
 		}
	}
	function settings(){
		$data = array();
		$data['tab'] = 6;
		$this->layout->frontPage('settings',$data);
	}

	function uploadfile($path = './avatar/' ){				
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
}
?>
