<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Order_customer_model extends Model{
	
	var $id  	     = null;
	var $full_name   = null;
	var $email  	  = null;
	var $phone  	  = null;
	var $fax  	     = null;
	var $address  	  = null;
	var $note  	     = null;	
	var $create_date = null;	
	
	function Order_customer_model(){
		parent::Model();		
	}
	function add(){
		$data = array( 'full_name' => $this->full_name ,						
			            'email' => $this->email ,		
			            'phone' => $this->phone ,
			            'fax' => $this->fax ,
			            'address' => $this->address ,
			            'note' => $this->note ,			           
			            'create_date' => date("Y-m-d H:i:s")			            			      	               			           
			           );
		$this->db->insert('order_customer', $data);  
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('order_customer')){			
			return true ;
		}
		return false ;	 		 
	}			
	function get_order_customer($page = 0){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`full_name` , ' ;
		$query .= '		`email` , ' ;		
		$query .= '		`phone` , ' ;		
		$query .= '		`fax` , ' ;		
		$query .= '		`address` , ' ;		
		$query .= '		`note` , ' ;				
		$query .= "     DATE_FORMAT(create_date, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(create_date, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(create_date, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(create_date, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(create_date, '%d-%m-%Y') createdate ";						
		$query .= '	FROM order_customer ' ;				
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
		$query .= '	FROM order_customer ' ; 
				
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
}
?>