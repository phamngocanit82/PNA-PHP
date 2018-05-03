<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Key_tsdh_model extends Model{
	function Key_tsdh_model(){
		parent::Model();		
	}
	function addKey_tsdh($image){
		$key_tsdh = array();
		$key_tsdh['title'] = $this->input->post('title');
		$key_tsdh['description'] = $this->input->post('description');				
		$key_tsdh['image'] = $image;
		$key_tsdh['createdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('key_tsdh', $key_tsdh)){
			return true;
		}
		return false ;
	}
	function editKey_tsdh($id,$image){
		$key_tsdh = array()    ;
		$key_tsdh['title'] = $this->input->post('title');
		$key_tsdh['description'] = $this->input->post('description');				
		$key_tsdh['image'] = $image;
		$key_tsdh['createdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('key_tsdh', $key_tsdh)){
			return true ;
		}
		return false ;		 
	}
	function deleteKey_tsdh($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('key_tsdh')){			
			return true ;
		}
		return false ;	 
	}
	function deleteImageKey_tsdh($id){
		$key_tsdh = array()    ;
		$key_tsdh['image'] = '';
		$this->db->where('id', intval($id));		
		if($this->db->update('key_tsdh', $key_tsdh)){
			return true ;
		}
		return false ;		 
	}
	function allKey_tsdh($page = 0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	title, ';
 		$query .= ' 	description, ';  
 		$query .= ' 	image, ';  		
 		$query .= "     DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(createdate, '%d-%m-%Y') createdate ";		
 		$query .= ' FROM key_tsdh ';
 		$query .= ' ORDER BY key_tsdh.createdate DESC ';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getAllkey_tsdh(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	title, '; 
 		$query .= ' 	description, ';  
 		$query .= ' 	image, '; 
 		$query .= "     DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(createdate, '%d-%m-%Y') createdate ";		
 		$query .= ' FROM key_tsdh ';
 		$query .= ' ORDER BY key_tsdh.createdate DESC ';
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getTotalRows(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM key_tsdh '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function getkey_tsdh($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	title, '; 
 		$query .= ' 	description, ';  
 		$query .= ' 	image, '; 
 		$query .= "     DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(createdate, '%d-%m-%Y') createdate ";	
 		$query .= ' FROM key_tsdh ';
 		$query .= ' WHERE id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
}
?>