<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Stock_product_model extends Model{
	
	var $id  	    = null;	
	var $id_product = null;
	var $quanlity   = null;	
	var $note       = null;
	
	function Stock_product_model(){
		parent::Model();		
	}
	function add(){
		$data = array( 'id_product' => $this->id_product ,						
			            'quanlity' => $this->quanlity ,
			            'note' => $this->note 			            					      	               			           
			           );
		$this->db->insert('stock_product', $data);  
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('stock_product')){			
			return true ;
		}
		return false ;	 		 
	}			
	function get_stock_product($page = 0){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`id_product` , ' ;
		$query .= '		`quanlity` , ' ;
		$query .= '		`note` ' ;		
		$query .= '	FROM stock_product ' ;				
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
		$query .= '	FROM stock_product ' ; 
				
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
}
?>