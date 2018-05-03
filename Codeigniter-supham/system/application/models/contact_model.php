<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Contact_model extends Model{
	function Contact_model(){
		parent::Model();		
	}
	function addContact(){
		$register = array();
		$register['name'] = $this->input->post('name');		
		$register['address'] = $this->input->post('address');
		$register['telephone'] = $this->input->post('telephone');
		$register['mobilephone'] = $this->input->post('mobilephone');
		$register['email'] = $this->input->post('email');
		$register['description'] = $this->input->post('description');
		$register['registerdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('contact', $register)){
			return true;
		}
		return false ;
	}
	function deleteContact($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('contact')){			
			return true ;
		}
		return false ;	 
	}
	function allContact($page = 0){
		$query = '';
 		$query .= ' SELECT *'; 			
 		$query .= ' FROM contact ';
 		$query .= ' ORDER BY id DESC';
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
 		$query .= ' FROM contact '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	
}
?>