<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Order_product_model extends Model{
	
	var $id  	           = null;
	var $id_order_customer = null;
	var $id_product        = null;
	var $quanlity          = null;	
	  
	function Order_product_model(){
		parent::Model();		
	}
	function add(){
		$data = array( 'id_order_customer' => $this->id_order_customer ,						
			            'id_product' => $this->id_product ,
			            'quanlity' => $this->quanlity 			            
			           );
		$this->db->insert('order_product', $data);  
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('order_product')){			
			return true ;
		}
		return false ;	 		 
	}			
	function get_order_product($page = 0){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`id_order_customer` , ' ;
		$query .= '		`id_product` , ' ;
		$query .= '		`quanlity` ' ;		
		$query .= '	FROM order_product ' ;				
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
		$query .= '	FROM order_product ' ; 
				
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
}
?>