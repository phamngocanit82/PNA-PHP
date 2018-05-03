<?php
class Exam_question_tnpt extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('exam_question_tnpt_model'); 
 	} 	
 	function Exam_question_tnpt(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Exam_question_tnpt::add();		
	}	
	function add(){
		checkLogin();
		$this->layout->backPage('exam_question_tnpt_add');							
	}
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$exam_question_tnpt = $this->exam_question_tnpt_model->getExam_question_tnpt($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($exam_question_tnpt){
			$data['title'] = $exam_question_tnpt->title;
			$data['description'] = $exam_question_tnpt->description;
			$data['image'] = $exam_question_tnpt->image;
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}			
		$this->layout->backPage('exam_question_tnpt_edit',$data);							
	}
	function deleteImage($id,$page=0){
 		checkLogin();			
 		$exam_question_tnpt = $this->exam_question_tnpt_model->getExam_question_tnpt($id) ;
 		if($exam_question_tnpt) {
			if( file_exists('uploads/exam_question_tnpt/'.$exam_question_tnpt->image) )		 		
		 		unlink('uploads/exam_question_tnpt/'.$exam_question_tnpt->image);			
		} 
		$this->exam_question_tnpt_model->deleteImageExam_question_tnpt($id);
		redirect('admin/exam_question_tnpt/edit/'.$id.'/'.$page);
 	}
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['exam_question_tnpt'] = $this->exam_question_tnpt_model->allExam_question_tnpt($page);
		$config = pagination(base_url().'admin/exam_question_tnpt/all', $this->exam_question_tnpt_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('exam_question_tnpt_all',$data);			
	}
	function view($id){
		checkLogin();
		$data = array();		
		$data['exam_question_tnpt'] = $this->exam_question_tnpt_model->getExam_question_tnpt($id);
		$this->layout->backPage('exam_question_tnpt_view',$data);			
	}
	function save_add(){
		checkLogin();		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('exam_question_tnpt_add');	
		} 
		else{
			$image = exam_question_tnpt::exam_question_tnptUpload();			
			if($this->exam_question_tnpt_model->addExam_question_tnpt($image)){				
				redirect('admin/exam_question_tnpt/all');										
			} 		
			else{
				redirect('admin/exam_question_tnpt/add');
			}
		}
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$data = array();
		$exam_question_tnpt = $this->exam_question_tnpt_model->getExam_question_tnpt($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($exam_question_tnpt){
			$data['title'] = $exam_question_tnpt->title;
			$data['description'] = $exam_question_tnpt->description;
			if($exam_question_tnpt->image)
				$data['image'] = $exam_question_tnpt->image;
			else 
				$data['image'] = exam_question_tnpt::exam_question_tnptUpload();
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('exam_question_tnpt_edit',$data);	
		} 
		else{
			if($this->exam_question_tnpt_model->editExam_question_tnpt($id,$data['image'])){				
				redirect('admin/exam_question_tnpt/all/'.$page);										
			} 		
			else{
				redirect('admin/exam_question_tnpt/edit');
			}
		}
	}
	function delete($id=0){
		checkLogin();
		$exam_question_tnpt = $this->exam_question_tnpt_model->getExam_question_tnpt($id) ;
 		if($exam_question_tnpt) {
 			if($exam_question_tnpt->image)
				if( file_exists('uploads/exam_question_tnpt/'.$exam_question_tnpt->image) )		 		
		 			unlink('uploads/exam_question_tnpt/'.$exam_question_tnpt->image);			
		} 
		$this->exam_question_tnpt_model->deleteExam_question_tnpt($id);	
		redirect('admin/exam_question_tnpt/all');
	}	
	function exam_question_tnptUpload($path = './uploads/'){
 		chmod('./uploads',0777);
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
