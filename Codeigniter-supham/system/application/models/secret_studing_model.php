<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Secret_studing_model extends Model{
	function secret_studing_model(){
		parent::Model();		
	}
	function addSecret_studing($image){
		$secret_studing = array();
		$secret_studing['title'] = $this->input->post('title');
		$secret_studing['description'] = $this->input->post('description');				
		$secret_studing['image'] = $image;
		$secret_studing['createdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('secret_studing', $secret_studing)){
			return true;
		}
		return false ;
	}
	function editSecret_studing($id,$image){
		$secret_studing = array()    ;
		$secret_studing['title'] = $this->input->post('title');
		$secret_studing['description'] = $this->input->post('description');				
		$secret_studing['image'] = $image;
		$secret_studing['createdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('secret_studing', $secret_studing)){
			return true ;
		}
		return false ;		 
	}
	function deleteSecret_studing($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('secret_studing')){			
			return true ;
		}
		return false ;	 
	}
	function deleteImageSecret_studing($id){
		$secret_studing = array()    ;
		$secret_studing['image'] = '';
		$this->db->where('id', intval($id));		
		if($this->db->update('secret_studing', $secret_studing)){
			return true ;
		}
		return false ;		 
	}
	function allSecret_studing($page = 0){
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
 		$query .= ' FROM secret_studing ';
 		$query .= ' ORDER BY secret_studing.createdate DESC ';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getAllSecret_studing(){
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
 		$query .= ' FROM secret_studing ';
 		$query .= ' ORDER BY secret_studing.createdate DESC ';
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
 		$query .= ' FROM secret_studing '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function getSecret_studing($id){
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
 		$query .= ' FROM secret_studing ';
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