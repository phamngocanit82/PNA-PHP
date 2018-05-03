<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
function changeLanguage(){
	$CI =& get_instance();
	if(!$CI->session->userdata('lang')){
		$CI->session->set_userdata('lang','vi');
	}			
	$language = 'vietnamese';
	if($CI->session->userdata('lang') == 'en'){
		$language = 'english';
	}		
	$CI->lang->load('saigonpearl', $language);
}
function checkLogin(){	
	$CI =& get_instance();
	if(!$CI->session->userdata('user')){		
		redirect('admin/login');	
		return;
	}
	else{
		if($CI->session->userdata('user')->permission==0){
			redirect('admin/login');	
			return;
		}
	}
}
function pagination($url, $total ,$perPage = 7 , $crrPage = 0 , $uri_segment = 3) {
	$CI =& get_instance();
	$config = array();
	// set url for pagination
	$config['base_url'] =$url ;
	// total record
	$config['total_rows'] =$total;
	// total record on a page
	$config['per_page'] = $perPage;
	$config['cur_page'] = $crrPage;
	$config['uri_segment'] = $uri_segment ;
	$config['full_tag_open'] = '<div class="paging blue">';
	$config['full_tag_close'] = '</div>';  
	$config['last_link'] = $CI->lang->line('end_page');
	$config['first_link'] = $CI->lang->line('start_page');;
	
	$config['last_tag_open'] = '';
	$config['last_tag_close'] = '';
	
	$config['next_tag_open'] = '';
	$config['next_tag_close'] = '';
	
	$config['prev_tag_open'] = '';
	$config['prev_tag_close'] = '';
	
	$config['cur_tag_open'] = '<span class="active">';
	$config['cur_tag_close'] = '</span>';
	
	$config['num_tag_open'] = '';
	$config['num_tag_close'] = '';
	
	return $config ;
}
function safeStrip( $text ) {
	
	$text = preg_replace( '/</', ' <', $text);
	$text = preg_replace( '/>/', '> ', $text);
	$desc = strip_tags( $text );	
	$desc = preg_replace( '/  /', ' ', $desc );

	return $desc;
}
function checkLength($text, $maxchars=0) {
	global $cfg_mamblog;
	
	$newtext = safeStrip( $text );
	$strlen = strlen( $newtext );

	if($maxchars > 0 && $maxchars < $strlen) {		
		$text = substr($newtext, 0, $maxchars );
		
		$text1 = substr($text, 0, strripos($text, ' ', 0));		
		if(strlen($text1) == 0){
			$text1 = $text;
		}
		$text = $text1."...";
		
	}else{
		$text = safeStrip( $text );
	}

	return $text;
}
function createDir($path){
	if(!is_dir($path)){
		$arrPath = explode('/' , $path );
		$dir = '';
		if(($arrPath)&&(count($arrPath)>0)){
			for($i=0; $i<count($arrPath);$i++){
				if($i>0){
					$dir .= '/'.$arrPath[$i];
				} else {
					$dir .= $arrPath[$i];
				}
				if (!is_dir($dir)) {
					mkdir($dir, 0777);
				}
			}
		}
		
	}
} 		
?>