<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Why_need_teacher_model extends Model{
	function Why_need_teacher_model(){
		parent::Model();		
	}
	function addWhy_need_teacher(){
		$why_need_teacher = array();
		$why_need_teacher['description'] = $this->input->post('description');						
		$why_need_teacher['createdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('why_need_teacher', $why_need_teacher)){
			return true;
		}
		return false ;
	}
	function editWhy_need_teacher($id){
		$why_need_teacher = array();		
		$why_need_teacher['description'] = $this->input->post('description');						
		$why_need_teacher['createdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('why_need_teacher', $why_need_teacher)){
			return true ;
		}
		return false ;		 
	}	
	function getTotalRows(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM why_need_teacher '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}	
	function getIDWhy_need_teacher(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id '; 		
 		$query .= ' FROM why_need_teacher '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->id ;
		}
		return 0;
 	}
 	function getWhy_need_teacher($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		 		
 		$query .= ' 	description, ';   		
 		$query .= "     DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(createdate, '%d-%m-%Y') createdate ";	
 		$query .= ' FROM why_need_teacher ';
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