<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class School_model extends Model{
	function School_model(){
		parent::Model();		
	}
	function addSchool(){
		$school = array();
		$school['name'] = $this->input->post('schoolName');				
		if($this->db->insert('school', $school)){
			return true;
		}
		return false ;
	}
	function editSchool($id){
		$school = array()    ;
		$school['name'] =  $this->input->post('schoolName') ;
		$this->db->where('id', intval($id));		
		if($this->db->update('school', $school)){
			return true ;
		}
		return false ;		 
	}
	function deleteSchool($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('school')){			
			return true ;
		}
		return false ;	 
	}
	function allSchool($page = 0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM school ';
 		$query .= ' ORDER BY id ';
 		$query .= '	LIMIT ' . $page .',' . DEFAULT_LIMIT;
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getAllSchool(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM school ';
 		$query .= ' ORDER BY id '; 		
 		$result  = $this->db->query($query);
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
 		$query .= ' FROM school '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function getSchool($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM school ';
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