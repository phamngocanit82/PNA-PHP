<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class About_us_model extends Model{
	function About_us_model(){
		parent::Model();		
	}
	function addAbout(){
		$about = array();
		$about['title'] = $this->input->post('title');
		$about['description'] = $this->input->post('description');						
		if($this->db->insert('about', $about)){
			return true;
		}
		return false ;
	}
	function editAbout($id){
		$about = array();		
		$about['title'] = $this->input->post('title');
		$about['description'] = $this->input->post('description');
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
 		$query .= ' 	title, ';   		
 		$query .= ' 	description '; 
 		$query .= ' FROM about ';
 		$query .= ' WHERE id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
 	function get_allabout(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		 		
 		$query .= ' 	title, ';   		
 		$query .= ' 	description '; 
 		$query .= ' FROM about ';						
			
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}
}
?>