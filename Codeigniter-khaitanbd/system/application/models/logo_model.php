<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Logo_model extends Model{
	var $id  	          = null;
	var $image            = null;
	var $order_logo  	  = null;
	var $lock        	  = null;
	function Logo_model(){
		parent::Model();		
	}
	function add(){
		$logo = array()    ;
		$logo['image'] =  $this->image ;
		$logo['order_logo'] = 1 ;
		$logo['lock'] = 1;
		if($this->db->insert('logo', $logo)){
			return true;
		}
		return false ; 
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('logo')){			
			return true ;
		}
		return false ;	 		 
	}			
	function get_logoid($id){
		$query  = '' ;
		$query .= '	SELECT `id`,`image` ' ;		
		$query .= '	FROM logo ' ;				
		$query .= '	WHERE `id` = '. intval($id);
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0] ;
		}
		return false ;
	}	
	function get_alllogo(){
		$query  = '' ;
		$query .= '	SELECT id,image,order_logo ' ;
		$query .= '	FROM logo ' ;						
		$query .= '	ORDER BY id asc ' ;		
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}
	function get_total_rows(){
		$query  = '' ;
		$query .= ' SELECT count( id ) total ' ;
		$query .= '	FROM logo' ;										
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
}
?>