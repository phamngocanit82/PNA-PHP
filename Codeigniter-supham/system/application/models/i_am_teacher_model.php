<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class I_am_teacher_model extends Model{
	function i_am_teacher_model(){
		parent::Model();		
	}
	function addI_am_teacher(){
		$i_am_teacher = array();
		$i_am_teacher['description'] = $this->input->post('description');						
		$i_am_teacher['createdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('i_am_teacher', $i_am_teacher)){
			return true;
		}
		return false ;
	}
	function editI_am_teacher($id){
		$i_am_teacher = array();		
		$i_am_teacher['description'] = $this->input->post('description');						
		$i_am_teacher['createdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('i_am_teacher', $i_am_teacher)){
			return true ;
		}
		return false ;		 
	}	
	function getTotalRows(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM i_am_teacher '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}	
	function getIDI_am_teacher(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id '; 		
 		$query .= ' FROM i_am_teacher '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->id ;
		}
		return 0;
 	}
 	function getI_am_teacher($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		 		
 		$query .= ' 	description, ';   		
 		$query .= "     DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(createdate, '%d-%m-%Y') createdate ";	
 		$query .= ' FROM i_am_teacher ';
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