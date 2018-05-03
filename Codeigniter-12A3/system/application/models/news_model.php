<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class News_model extends Model{
	function News_model(){
		parent::Model();		
	}
	function add(){
		$news = array();
		$news['title'] = $this->input->post('title');
		$news['description'] = $this->input->post('description');				
		$news['createdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('12a3_news', $news)){
			return true;
		}
		return false ;
	}
	function edit($id){
		$news = array()    ;
		$news['title'] = $this->input->post('title');
		$news['description'] = $this->input->post('description');						
		$news['createdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('12a3_news', $news)){
			return true ;
		}
		return false ;		 
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('12a3_news')){			
			return true ;
		}
		return false ;	 
	}	
	function getID($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	title, '; 
 		$query .= ' 	description, ';   		
 		$query .= "     DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(createdate, '%d-%m-%Y') createdate ";	
 		$query .= ' FROM 12a3_news ';
 		$query .= ' WHERE id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
	function getAll($page = 0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	title, ';
 		$query .= ' 	description, ';   		
 		$query .= "     DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(createdate, '%d-%m-%Y') createdate ";		
 		$query .= ' FROM 12a3_news ';
 		$query .= ' ORDER BY id DESC ';
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
 		$query .= ' FROM 12a3_news '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	} 	
}
?>