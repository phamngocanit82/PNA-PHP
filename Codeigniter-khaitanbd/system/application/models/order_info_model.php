<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Order_info_model extends Model{
	
	var $id  	      = null;
	var $introduce    = null;
	var $contact_info = null;
	
	function Order_info_model(){
		parent::Model();		
	}
	function add(){
		$data = array( '$introduce' => $this->$introduce ,						
			            '$contact_info' => $this->$contact_info 			            					      	               			           
			           );
		$this->db->insert('order_info', $data);  
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('order_info')){			
			return true ;
		}
		return false ;	 		 
	}			
	function get_order_info($page = 0){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`$introduce` , ' ;
		$query .= '		`$contact_info` ' ;		
		$query .= '	FROM order_info ' ;				
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
		$query .= '	FROM order_info ' ; 
				
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
}
?>