<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Announcement_model extends Model{
	function Announcement_model(){
		parent::Model();		
	}
	function addAnnouncement($image){
		$announcement = array();
		$announcement['title'] = $this->input->post('title');
		$announcement['description'] = $this->input->post('description');				
		$announcement['image'] = $image;
		$announcement['createdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('announcement', $announcement)){
			return true;
		}
		return false ;
	}
	function editAnnouncement($id,$image){
		$announcement = array()    ;
		$announcement['title'] = $this->input->post('title');
		$announcement['description'] = $this->input->post('description');				
		$announcement['image'] = $image;
		$announcement['createdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('announcement', $announcement)){
			return true ;
		}
		return false ;		 
	}
	function deleteAnnouncement($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('announcement')){			
			return true ;
		}
		return false ;	 
	}
	function deleteImageAnnouncement($id){
		$announcement = array()    ;
		$announcement['image'] = '';
		$this->db->where('id', intval($id));		
		if($this->db->update('announcement', $announcement)){
			return true ;
		}
		return false ;		 
	}
	function allAnnouncement($page = 0){
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
 		$query .= ' FROM announcement ';
 		$query .= ' ORDER BY announcement.createdate DESC ';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getAllannouncement(){
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
 		$query .= ' FROM announcement ';
 		$query .= ' ORDER BY announcement.createdate DESC ';
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
 		$query .= ' FROM announcement '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function getAnnouncement($id){
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
 		$query .= ' FROM announcement ';
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