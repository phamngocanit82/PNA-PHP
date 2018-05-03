<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Level_model extends Model{
	function Level_model(){
		parent::Model();		
	}
	function addLevel(){
		$level = array();
		$level['name'] = $this->input->post('levelName');				
		if($this->db->insert('level', $level)){
			return true;
		}
		return false ;
	}
	function editLevel($id){
		$level = array()    ;
		$level['name'] =  $this->input->post('levelName') ;
		$this->db->where('id', intval($id));		
		if($this->db->update('level', $level)){
			return true ;
		}
		return false ;		 
	}
	function deleteLevel($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('level')){			
			return true ;
		}
		return false ;	 
	}
	function allLevel($page = 0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM level ';
 		$query .= ' ORDER BY id ';
 		$query .= '	LIMIT ' . $page .',' . DEFAULT_LIMIT;
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getAllLevel($page = 0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM level ';
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
 		$query .= ' FROM level '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function getLevel($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM level ';
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