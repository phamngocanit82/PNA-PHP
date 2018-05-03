<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Contact_us_model extends Model{
	
	var $id  	     = null;
	var $name        = null;
	var $address  	 = null;
	var $homephone   = null;
	var $mobilephone = null;
	var $email  	 = null;
	var $description = null;
	function Contact_us_model(){
		parent::Model();		
	}
	function add(){
		$contact_us = array()    ;
		$contact_us['name'] =  $this->name ;	
		$contact_us['address'] =  $this->address ;
		$contact_us['homephone'] =  $this->homephone ;
		$contact_us['mobilephone'] =  $this->mobilephone ;
		$contact_us['email'] =  $this->email ;						
		$contact_us['description'] =  $this->description ;
		$contact_us['create_date'] =  date("Y-m-d H:i:s"); 	
		if($this->db->insert('contact', $contact_us)){
			return true;
		}
		return false ;  
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('contact')){			
			return true ;
		}
		return false ;	 		 
	}			
	function get_contact_us($page = 0){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`name` , ' ;
		$query .= '		`address` , ' ;	
		$query .= '		`homephone` , ' ;	
		$query .= '		`mobilephone` , ' ;	
		$query .= '		`email` , ' ;	
		$query .= '		`description` ' ;		
		$query .= '	FROM contact ' ;				
		$query .= '	ORDER BY id LIMIT '. $page . ',' . NUM_RECORD_ON_PAGE  ;
		
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}
	function get_total_rows(){
		$query  = '' ;
		$query .= '	SELECT ' ;
		$query .= '		count(`id`) total ' ;
		$query .= '	FROM contact ' ; 
				
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
}
?>