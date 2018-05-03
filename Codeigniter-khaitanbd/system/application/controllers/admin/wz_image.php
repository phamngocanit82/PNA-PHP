<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * TinyMCE plugin Controller (wzimage)
 * 
 * Version 0.1 (c) Wiredesignz 2008-04-19
**/
class Wz_image extends Controller {
	
	var $wz_config = array();
	
	function Wz_image()	{
		
		parent::Controller();
		
		$this->load->helper('directory');
		
		($src = $this->uri->rsegment(3)) AND $src .= '/' OR $src = '';
		
		$this->wz_config = array(
			'wz_image'	=> base_url().'/admin/wz_image/',
			'mce_base' 	=> base_url().'scripts/tiny_mce/',
			'wz_plugin'	=> base_url().'scripts/tiny_mce/plugins/wzimage/',
			'upl_dir'	=> base_url().'images/'.$src,
			'upl_path'	=> './images/'.$src,
			'src'		=> $src,
		);
		
	}
	
	function index() {	
		//$this->layout->backPage('wz_image_view', $this->wz_config);
		$this->load->view('back_end/wz_image_view',$this->wz_config);
	}
	
	function upload($dir = '') {
		
		$config['upload_path']   = $this->wz_config['upl_path'];
		$config['allowed_types'] = 'gif|jpg|png';
		
		$config['max_size']	  = '2056';
		$config['max_width']  = '2056';
		$config['max_height'] = '1024';
		
		$this->load->library('upload', $config);
		
		$this->upload->do_upload();
		$err = $this->upload->display_errors();
		
		$this->index();
		
	}

}
