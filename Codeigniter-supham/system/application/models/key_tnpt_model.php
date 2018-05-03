<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Key_tnpt_model extends Model{
	function Key_tnpt_model(){
		parent::Model();		
	}
	function addKey_tnpt($image){
		$key_tnpt = array();
		$key_tnpt['title'] = $this->input->post('title');
		$key_tnpt['description'] = $this->input->post('description');				
		$key_tnpt['image'] = $image;
		$key_tnpt['createdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('key_tnpt', $key_tnpt)){
			return true;
		}
		return false ;
	}
	function editKey_tnpt($id,$image){
		$key_tnpt = array()    ;
		$key_tnpt['title'] = $this->input->post('title');
		$key_tnpt['description'] = $this->input->post('description');				
		$key_tnpt['image'] = $image;
		$key_tnpt['createdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('key_tnpt', $key_tnpt)){
			return true ;
		}
		return false ;		 
	}
	function deleteKey_tnpt($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('key_tnpt')){			
			return true ;
		}
		return false ;	 
	}
	function deleteImageKey_tnpt($id){
		$key_tnpt = array()    ;
		$key_tnpt['image'] = '';
		$this->db->where('id', intval($id));		
		if($this->db->update('key_tnpt', $key_tnpt)){
			return true ;
		}
		return false ;		 
	}
	function allKey_tnpt($page = 0){
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
 		$query .= ' FROM key_tnpt ';
 		$query .= ' ORDER BY key_tnpt.createdate DESC ';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getAllKey_tnpt(){
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
 		$query .= ' FROM key_tnpt ';
 		$query .= ' ORDER BY key_tnpt.createdate DESC ';
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
 		$query .= ' FROM key_tnpt '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function getKey_tnpt($id){
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
 		$query .= ' FROM key_tnpt ';
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