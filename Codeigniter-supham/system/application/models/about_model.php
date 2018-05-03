<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class About_model extends Model{
	function About_model(){
		parent::Model();		
	}
	function addAbout(){
		$about = array();
		$about['description'] = $this->input->post('description');						
		$about['createdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('about', $about)){
			return true;
		}
		return false ;
	}
	function editAbout($id){
		$about = array();		
		$about['description'] = $this->input->post('description');						
		$about['createdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('about', $about)){
			return true ;
		}
		return false ;		 
	}	
	function getTotalRows(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM about '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}	
	function getIDAbout(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id '; 		
 		$query .= ' FROM about '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->id ;
		}
		return 0;
 	}
 	function getAbout($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		 		
 		$query .= ' 	description, ';   		
 		$query .= "     DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(createdate, '%d-%m-%Y') createdate ";	
 		$query .= ' FROM about ';
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