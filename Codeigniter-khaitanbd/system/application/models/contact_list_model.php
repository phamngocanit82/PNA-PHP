<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Contact_list_model extends Model{
	
	var $id  	     = null;
	var $full_name   = null;
	var $email  	  = null;
	var $phone  	  = null;
	var $fax  	     = null;
	var $address  	  = null;
	var $company  	  = null;
	var $title  	  = null;
	var $description = null;	
	var $create_date = null;	
	
	function Contact_list_model(){
		parent::Model();		
	}
	function add(){
		$data = array( 'full_name' => $this->full_name ,						
			            'email' => $this->email ,		
			            'phone' => $this->phone ,
			            'fax' => $this->fax ,
			            'address' => $this->address ,
			            'company' => $this->company ,
			            'title' => $this->title ,
			            'description' => $this->description ,
			            'create_date' => date("Y-m-d H:i:s")			            			      	               			           
			           );
		$this->db->insert('contact_list', $data);  
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('contact_list')){			
			return true ;
		}
		return false ;	 		 
	}			
	function get_contact_list($page = 0){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`full_name` , ' ;
		$query .= '		`email` , ' ;		
		$query .= '		`phone` , ' ;		
		$query .= '		`fax` , ' ;		
		$query .= '		`address` , ' ;		
		$query .= '		`company` , ' ;		
		$query .= '		`title` , ' ;		
		$query .= '		`description` , ' ;	
		$query .= "     DATE_FORMAT(create_date, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(create_date, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(create_date, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(create_date, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(create_date, '%d-%m-%Y') createdate ";						
		$query .= '	FROM contact_list ' ;				
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
		$query .= '	FROM contact_list ' ; 
				
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
}
?>