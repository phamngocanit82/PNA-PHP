<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Menu_model extends Model{
	var $id   = null;
	var $name = null;
	function Menu_model(){
		parent::Model();		
	}
	function add(){
		$data = array( 'name' => $this->name);
		$this->db->insert('menu', $data);  
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('menu')){			
			return true ;
		}
		return false ;	 		 
	}
	function edit($id){
		$data = array( 'name' => $this->name);
		$this->db->where('id', intval($id));		
		if($this->db->update('menu', $data)){
			return true ;
		}
		return false ;		 
	}
	function get_menu_id($id){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`name`  ' ;	
		$query .= '	FROM menu ' ;				
		$query .= '	WHERE id = '. intval($id);
		
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0] ;
		}
		return false ;
	}			
	function get_menu($page = 0){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`name` ' ;	
		$query .= '	FROM menu ' ;				
		$query .= '	ORDER BY `id` LIMIT '. $page . ',' . NUM_RECORD_ON_PAGE  ;
		
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}
	function get_allmenu(){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`name`  ' ;	
		$query .= '	FROM menu ' ;						
			
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
		$query .= '	FROM menu ' ; 
				
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
}
?>