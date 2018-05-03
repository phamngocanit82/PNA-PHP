<?php
class Exam_question_tsdh extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('exam_question_tsdh_model'); 
 	} 	
 	function Exam_question_tsdh(){
 		$this->__construct(); 		
 	}	
	function index(){
		checkLogin();
		Exam_question_tsdh::add();		
	}	
	function add(){
		checkLogin();
		$this->layout->backPage('exam_question_tsdh_add');							
	}
	function edit($id=0,$page=0){
		checkLogin();
		$data = array();
		$exam_question_tsdh = $this->exam_question_tsdh_model->getExam_question_tsdh($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($exam_question_tsdh){
			$data['title'] = $exam_question_tsdh->title;
			$data['description'] = $exam_question_tsdh->description;
			$data['image'] = $exam_question_tsdh->image;
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}			
		$this->layout->backPage('exam_question_tsdh_edit',$data);							
	}
	function deleteImage($id,$page=0){
 		checkLogin();			
 		$exam_question_tsdh = $this->exam_question_tsdh_model->getExam_question_tsdh($id) ;
 		if($exam_question_tsdh) {
			if( file_exists('uploads/exam_question_tsdh/'.$exam_question_tsdh->image) )		 		
		 		unlink('uploads/exam_question_tsdh/'.$exam_question_tsdh->image);			
		} 
		$this->exam_question_tsdh_model->deleteImageExam_question_tsdh($id);
		redirect('admin/exam_question_tsdh/edit/'.$id.'/'.$page);
 	}
	function all($page=0){
		checkLogin();
		$data = array();
		$data['page'] = $page;
		$data['exam_question_tsdh'] = $this->exam_question_tsdh_model->allExam_question_tsdh($page);
		$config = pagination(base_url().'admin/exam_question_tsdh/all', $this->exam_question_tsdh_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->backPage('exam_question_tsdh_all',$data);			
	}
	function view($id){
		checkLogin();
		$data = array();		
		$data['exam_question_tsdh'] = $this->exam_question_tsdh_model->getExam_question_tsdh($id);
		$this->layout->backPage('exam_question_tsdh_view',$data);			
	}
	function save_add(){
		checkLogin();		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('exam_question_tsdh_add');	
		} 
		else{
			$image = exam_question_tsdh::exam_question_tsdhUpload();			
			if($this->exam_question_tsdh_model->addExam_question_tsdh($image)){				
				redirect('admin/exam_question_tsdh/all');										
			} 		
			else{
				redirect('admin/exam_question_tsdh/add');
			}
		}
	}
	function save_edit($id=0,$page=0){
		checkLogin();	
		$data = array();
		$exam_question_tsdh = $this->exam_question_tsdh_model->getExam_question_tsdh($id); 
		$data['id'] = $id;
		$data['page'] = $page;
		if($exam_question_tsdh){
			$data['title'] = $exam_question_tsdh->title;
			$data['description'] = $exam_question_tsdh->description;
			if($exam_question_tsdh->image)
				$data['image'] = $exam_question_tsdh->image;
			else 
				$data['image'] = exam_question_tsdh::exam_question_tsdhUpload();
		}
		else{
			$data['title'] = '';
			$data['description'] = '';
			$data['image'] = '';
		}		
		$this->form_validation->set_rules('title',lang('require_admin_title'), 'required');
		$this->form_validation->set_rules('description',lang('require_admin_description'), 'required');
		if ($this->form_validation->run() == FALSE){
			$this->layout->backPage('exam_question_tsdh_edit',$data);	
		} 
		else{
			if($this->exam_question_tsdh_model->editExam_question_tsdh($id,$data['image'])){				
				redirect('admin/exam_question_tsdh/all/'.$page);										
			} 		
			else{
				redirect('admin/exam_question_tsdh/edit');
			}
		}
	}
	function delete($id=0){
		checkLogin();
		$exam_question_tsdh = $this->exam_question_tsdh_model->getExam_question_tsdh($id) ;
 		if($exam_question_tsdh) {
 			if($exam_question_tsdh->image)
				if( file_exists('uploads/exam_question_tsdh/'.$exam_question_tsdh->image) )		 		
		 			unlink('uploads/exam_question_tsdh/'.$exam_question_tsdh->image);			
		} 
		$this->exam_question_tsdh_model->deleteExam_question_tsdh($id);	
		redirect('admin/exam_question_tsdh/all');
	}	
	function exam_question_tsdhUpload($path = './uploads/'){
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
