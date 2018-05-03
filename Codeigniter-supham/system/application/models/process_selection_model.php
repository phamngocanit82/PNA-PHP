<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Process_selection_model extends Model{
	function Process_selection_model(){
		parent::Model();		
	}
	function addProcess_selection(){
		$process_selection = array();
		$process_selection['description'] = $this->input->post('description');						
		$process_selection['createdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('process_selection', $process_selection)){
			return true;
		}
		return false ;
	}
	function editProcess_selection($id){
		$process_selection = array();		
		$process_selection['description'] = $this->input->post('description');						
		$process_selection['createdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('process_selection', $process_selection)){
			return true ;
		}
		return false ;		 
	}	
	function getTotalRows(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM process_selection '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}	
	function getIDProcess_selection(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id '; 		
 		$query .= ' FROM process_selection '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->id ;
		}
		return 0;
 	}
 	function getProcess_selection($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		 		
 		$query .= ' 	description, ';   		
 		$query .= "     DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(createdate, '%d-%m-%Y') createdate ";	
 		$query .= ' FROM process_selection ';
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