<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Photos_model extends Model{
	function Photos_model(){
		parent::Model();		
	}
	function add(){
		$photos = array();
		$photos['id_photos_group'] = $this->input->post('id_photos_group');
		$photos['title'] = $this->input->post('title');
		$photos['image'] = $this->input->post('image');				
		$photos['createdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('12a3_photos', $photos)){
			return true;
		}
		return false ;
	}
	function edit($id){
		$photos = array()    ;
		$photos['id_photos_group'] = $this->input->post('id_photos_group');
		$photos['title'] = $this->input->post('title');
		$photos['image'] = $this->input->post('image');
		$photos['createdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('12a3_photos', $photos)){
			return true ;
		}
		return false ;		 
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('12a3_photos')){			
			return true ;
		}
		return false ;	 
	}	
	function getID($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	id_photos_group, '; 
 		$query .= ' 	title, '; 
 		$query .= ' 	image, ';   		 		
 		$query .= "     DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(createdate, '%d-%m-%Y') createdate ";	
 		$query .= ' FROM 12a3_photos ';
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
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	a.id, '; 		
 		$query .= ' 	a.id_photos_group, '; 
 		$query .= ' 	a.title,b.title as title_group, '; 
 		$query .= ' 	a.image, ';   		
 		$query .= "     DATE_FORMAT(a.createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(a.createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(a.createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(a.createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(a.createdate, '%d-%m-%Y') createdate ";	
 		$query .= ' FROM 12a3_photos a';
 		$query .= '     LEFT OUTER JOIN 12a3_photos_group b ON b.id=a.id_photos_group ';
 		$query .= ' ORDER BY id_photos_group DESC ';
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
 		$query .= ' FROM 12a3_photos '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	} 	
}
?>