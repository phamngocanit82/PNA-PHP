<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Layout 
{
	var $layout;
	function Layout(){
		$this->layout =& get_instance();
	}
	function frontPage($view,$data = null){				
		$this->layout->load->view("common/header",$data);
		$this->layout->load->view("common/left",$data);
		$this->layout->load->view($view,$data);
		$this->layout->load->view("common/right",$data);
		$this->layout->load->view("common/footer", $data);
	}
	function backPage($view,$data = null){				
		$this->layout->load->view("admin/common/header",$data);
		$this->layout->load->view("admin/common/left",$data);
		$this->layout->load->view("admin/".$view,$data);		
		$this->layout->load->view("admin/common/footer", $data);
	}	
}
?>
