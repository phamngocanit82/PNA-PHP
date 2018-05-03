<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Provinces_model extends Model{
	function Provinces_model(){
		parent::Model();		
	}
	function addProvinces(){
		$provinces = array();
		$provinces['name'] = $this->input->post('provincesName');				
		if($this->db->insert('provinces', $provinces)){
			return true;
		}
		return false ;
	}
	function editProvinces($id){
		$provinces = array()    ;
		$provinces['name'] =  $this->input->post('provincesName') ;
		$this->db->where('id', intval($id));		
		if($this->db->update('provinces', $provinces)){
			return true ;
		}
		return false ;		 
	}
	function deleteDistricts($id_provinces){
		$this->db->where('id_provinces', intval($id_provinces));		
		if ($this->db->delete('districts')){			
			return true ;
		}
		return false ;	 
	}
	function deleteProvinces($id){
		$this->deleteDistricts($id);
		$this->db->where('id', intval($id));		
		if ($this->db->delete('provinces')){			
			return true ;
		}
		return false ;	 
	}	
	function allProvinces($page = 0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM provinces ';
 		$query .= ' ORDER BY id ';
 		$query .= '	LIMIT ' . $page .',' . DEFAULT_LIMIT;
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getAllProvinces(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM provinces ';
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
 		$query .= ' FROM provinces '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function getProvinces($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM provinces ';
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