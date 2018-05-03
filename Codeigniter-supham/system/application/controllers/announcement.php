<?php
class Announcement extends Controller {
	function __construct(){
 		parent::Controller(); 		 		
		changeLanguage();
		$this->load->library('pagination');	
		$this->load->library('validation');
		$this->load->library('form_validation');
		$this->load->model('announcement_model'); 
 	} 	
 	function Announcement(){
 		$this->__construct(); 		
 	}	
	function index(){		
		Announcement::all();		
	}		
	function all($page=0){		
		$data = array();
		$data['page'] = $page;
		$data['announcement'] = $this->announcement_model->allAnnouncement($page);
		$config = pagination(base_url().'announcement/all', $this->announcement_model->getTotalRows(), DEFAULT_LIMIT-15, $page, 5);		
		$this->pagination->initialize($config);
		$this->layout->frontPage('announcement_all',$data);			
	}
	function view($id){		
		$data = array();		
		$data['announcement'] = $this->announcement_model->getAnnouncement($id);
		$this->layout->frontPage('announcement_view',$data);			
	}	 
}	 
?>
