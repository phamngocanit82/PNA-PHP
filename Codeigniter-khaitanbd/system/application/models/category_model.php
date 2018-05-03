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
		$data = array( 'idmenu' => $this->idmenu ,
					   'name' => $this->name ,
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
		$query .= '	SELECT a.id,a.name,b.id as idcategory,b.name as namecategory,b.code,b.lock ' ;
		$query .= '	FROM menu a left outer join category b on b.idmenu = a.id ' ;						
		$query .= '	ORDER BY a.id asc,b.id asc ' ;		
		$query .= '	LIMIT '. $page . ',' . NUM_RECORD_ON_PAGE  ;
		
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}
	function get_allcategory(){
		$query  = '' ;
		$query .= '	SELECT a.id,a.name,b.id as idcategory,b.name as namecategory,b.code,b.lock ' ;
		$query .= '	FROM menu a left outer join category b on b.idmenu = a.id ' ;						
		$query .= '	ORDER BY a.id asc,b.id asc ' ;		
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}
	function get_total_rows(){
		$query  = '' ;
		$query .= '	SELECT count( a.id ) total ' ;
		$query .= '	FROM menu a LEFT OUTER JOIN category b ON b.idmenu = a.id ' ; 
				
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