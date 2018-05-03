<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Diploma_model extends Model{
	function Diploma_model(){
		parent::Model();		
	}
	function addDiploma(){
		$diploma = array();
		$diploma['name'] = $this->input->post('diplomaName');				
		if($this->db->insert('diploma', $diploma)){
			return true;
		}
		return false ;
	}
	function editDiploma($id){
		$diploma = array()    ;
		$diploma['name'] =  $this->input->post('diplomaName') ;
		$this->db->where('id', intval($id));		
		if($this->db->update('diploma', $diploma)){
			return true ;
		}
		return false ;		 
	}
	function deleteDiploma($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('diploma')){			
			return true ;
		}
		return false ;	 
	}
	function allDiploma($page = 0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM diploma ';
 		$query .= ' ORDER BY id ';
 		$query .= '	LIMIT ' . $page .',' . DEFAULT_LIMIT;
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getAllDiploma(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM diploma ';
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
 		$query .= ' FROM diploma '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function getDiploma($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM diploma ';
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