<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Category_model extends Model{
	
	var $id   = null;
	var $idmenu = null;
	var $name = null;
	var $code = null;	
	var $lock = null;
	function Category_model(){
		parent::Model();		
	}
	function add(){
		$category = array()    ;
		$category['idmenu'] =  $this->idmenu ;	
		$category['name'] =  $this->name ;
		$category['code'] =  $this->code ;	
		$category['lock'] =  $this->lock ;						
		$category['create_date'] =  date("Y-m-d H:i:s"); 
		if($this->db->insert('category', $category)){
			return true;
		}
		return false ; 
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('category')){			
			return true ;
		}
		return false ;	 		 
	}
	function edit($id){
		$data = array( 'name' => $this->name ,
		               'code' => $this->code ,
		               'lock' => $this->lock );
		               
		$this->db->where('id', intval($id));		
		if($this->db->update('category', $data)){
			return true ;
		}
		return false ;		 
	}
	function get_category_id($id){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`name` , ' ;	
		$query .= '		`code` , ' ;	
		$query .= '		`lock` ' ;
		$query .= '	FROM category ' ;				
		$query .= '	WHERE id = '. intval($id);
		
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0] ;
		}
		return false ;
	}			
	function get_category($page = 0){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`name` , ' ;	
		$query .= '		`code` , ' ;	
		$query .= '		`lock` ' ;
		$query .= '	FROM category ' ;				
		$query .= '	ORDER BY `name` LIMIT '. $page . ',' . NUM_RECORD_ON_PAGE  ;
		
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}
	function get_allcategory(){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`name` , ' ;	
		$query .= '		`code` , ' ;	
		$query .= '		`lock` ' ;
		$query .= '	FROM category ' ;						
			
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
		$query .= '	FROM category ' ; 
				
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
	function get_idmenu($idmenu){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`name` , ' ;	
		$query .= '		`code` , ' ;	
		$query .= '		`lock` ' ;
		$query .= '	FROM category ' ;				
		$query .= '	WHERE idmenu = '. intval($idmenu);
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}	
	function exist_idmenu($idmenu){
		$query  = '' ;
		$query .= '	SELECT `idmenu` ' ;
		$query .= '	FROM category ' ;				
		$query .= '	WHERE idmenu = '. intval($idmenu);
		$query .= '	limit 1 ' ;
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}	
}
?>