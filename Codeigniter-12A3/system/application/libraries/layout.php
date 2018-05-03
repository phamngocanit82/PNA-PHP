<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Layout 
{
	var $layout;
	function Layout(){
		$this->layout =& get_instance();
	}
	function frontPage($view,$data = null){				
		$this->layout->load->view('front_end/common/header',$data);
		$this->layout->load->view('front_end/'.$view,$data);		
		$this->layout->load->view('front_end/common/righter',$data);
		$this->layout->load->view('front_end/common/footer', $data);
	}
	function backPage($view,$data = null){		
		$this->layout->load->view('back_end/common/header',$data);
		$this->layout->load->view('back_end/'.$view,$data);		
		$this->layout->load->view('back_end/common/righter',$data);
		$this->layout->load->view('back_end/common/footer', $data);		
	}	
}
?>
