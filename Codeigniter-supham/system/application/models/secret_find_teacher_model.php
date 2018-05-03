<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Secret_find_teacher_model extends Model{
	function Secret_find_teacher_model(){
		parent::Model();		
	}
	function addSecret_find_teacher(){
		$secret_find_teacher = array();
		$secret_find_teacher['description'] = $this->input->post('description');						
		$secret_find_teacher['createdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('secret_find_teacher', $secret_find_teacher)){
			return true;
		}
		return false ;
	}
	function editSecret_find_teacher($id){
		$secret_find_teacher = array();		
		$secret_find_teacher['description'] = $this->input->post('description');						
		$secret_find_teacher['createdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('secret_find_teacher', $secret_find_teacher)){
			return true ;
		}
		return false ;		 
	}	
	function getTotalRows(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM secret_find_teacher '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}	
	function getIDSecret_find_teacher(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id '; 		
 		$query .= ' FROM secret_find_teacher '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->id ;
		}
		return 0;
 	}
 	function getSecret_find_teacher($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		 		
 		$query .= ' 	description, ';   		
 		$query .= "     DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(createdate, '%d-%m-%Y') createdate ";	
 		$query .= ' FROM secret_find_teacher ';
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