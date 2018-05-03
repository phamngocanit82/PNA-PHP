<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Logo_product_model extends Model{
	
	var $id    = null;
	var $image = null;	
	
	function About_us_model(){
		parent::Model();		
	}
	function add(){
		$data = array( 'image' => $this->image );
		$this->db->insert('logo_product', $data);  
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('logo_product')){			
			return true ;
		}
		return false ;	 		 
	}			
	function get_logo_product($page = 0){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`image` ' ;		
		$query .= '	FROM logo_product ' ;				
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
		$query .= '	FROM logo_product ' ; 
				
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
}
?>