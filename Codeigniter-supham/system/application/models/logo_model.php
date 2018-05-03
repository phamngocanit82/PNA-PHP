<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Logo_model extends Model{
	function Logo_model(){
		parent::Model();		
	}
	function addLogo($image){
		$logo = array();		
		$logo['image'] = $image;			
		if($this->db->insert('logo', $logo)){
			return true;
		}
		return false ;
	}
	function deleteImageLogo($id){
		$logo = array();		
		$logo['image'] ='';	
		$this->db->where('id', intval($id));		
		if($this->db->update('logo', $logo)){
			return true ;
		}
		return false ;	 
	}
	function editLogo($id,$image){
		$logo = array();		
		$logo['image'] = $image;	
		$this->db->where('id', intval($id));		
		if($this->db->update('logo', $logo)){
			return true ;
		}
		return false ;		 
	}	
	function getTotalRows(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM logo '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}	
	function getIDLogo(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id '; 		
 		$query .= ' FROM logo '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->id ;
		}
		return 0;
 	}
 	function getLogo($id){
 		$query = '';
 		$query .= ' SELECT *'; 		
 		$query .= ' FROM logo ';
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