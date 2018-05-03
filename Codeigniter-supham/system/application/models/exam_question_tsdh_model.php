<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Exam_question_tsdh_model extends Model{
	function Exam_question_tsdh_model(){
		parent::Model();		
	}
	function addExam_question_tsdh($image){
		$exam_question_tsdh = array();
		$exam_question_tsdh['title'] = $this->input->post('title');
		$exam_question_tsdh['description'] = $this->input->post('description');				
		$exam_question_tsdh['image'] = $image;
		$exam_question_tsdh['createdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('exam_question_tsdh', $exam_question_tsdh)){
			return true;
		}
		return false ;
	}
	function editExam_question_tsdh($id,$image){
		$exam_question_tsdh = array()    ;
		$exam_question_tsdh['title'] = $this->input->post('title');
		$exam_question_tsdh['description'] = $this->input->post('description');				
		$exam_question_tsdh['image'] = $image;
		$exam_question_tsdh['createdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('exam_question_tsdh', $exam_question_tsdh)){
			return true ;
		}
		return false ;		 
	}
	function deleteExam_question_tsdh($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('exam_question_tsdh')){			
			return true ;
		}
		return false ;	 
	}
	function deleteImageExam_question_tsdh($id){
		$exam_question_tsdh = array()    ;
		$exam_question_tsdh['image'] = '';
		$this->db->where('id', intval($id));		
		if($this->db->update('exam_question_tsdh', $exam_question_tsdh)){
			return true ;
		}
		return false ;		 
	}
	function allExam_question_tsdh($page = 0){
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
 		$query .= ' FROM exam_question_tsdh ';
 		$query .= ' ORDER BY exam_question_tsdh.createdate DESC ';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getAllExam_question_tsdh(){
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
 		$query .= ' FROM exam_question_tsdh ';
 		$query .= ' ORDER BY exam_question_tsdh.createdate DESC ';
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
 		$query .= ' FROM exam_question_tsdh '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function getExam_question_tsdh($id){
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
 		$query .= ' FROM exam_question_tsdh ';
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