<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Districts_model extends Model{
	function Districts_model(){
		parent::Model();		
	}
	function addDistricts(){
		$districts = array();
		$districts['name'] = $this->input->post('districtsName');
		$districts['id_provinces'] = $this->input->post('id_provinces');
		if($this->db->insert('districts', $districts)){
			return true;
		}
		return false ;
	}
	function editDistricts($id){
		$districts = array()    ;
		$districts['name'] =  $this->input->post('districtsName') ;
		$this->db->where('id', intval($id));		
		if($this->db->update('districts', $districts)){
			return true ;
		}
		return false ;		 
	}
	function deleteDistricts($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('districts')){			
			return true ;
		}
		return false ;	 
	}
	function allDistricts($page = 0){		
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	a.id, a.name, '; 		
 		$query .= ' 	b.id AS id_provinces, b.name AS provincesName '; 		
 		$query .= ' FROM districts a ';
 		$query .= '     INNER JOIN provinces b ON b.id = a.id_provinces ';
 		$query .= ' ORDER BY a.id_provinces,a.name ';
 		$query .= '	LIMIT ' . $page .',' . DEFAULT_LIMIT;
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
 		$query .= ' FROM districts '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function getDistricts($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM districts ';
 		$query .= ' WHERE id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
 	function getGroupProvinces($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	name '; 		
 		$query .= ' FROM districts ';
 		$query .= ' WHERE id_provinces = '.intval($id);
 		$query .= ' ORDER BY name '; 	
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows;
		}				
		return null;
 	}
}
?>