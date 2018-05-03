<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends Model{
	var $id  	          = null;
	var $idcategory       = null;
	var $image            = null;
	var $name  	          = null;
	var $code             = null;
	var $quality          = null;
	var $description      = null;
	var $price            = null;
	var $flag_discounts   = null;
	var $flag_promotions  = null;
	var $flag_new         = null;		
	var $lock             = null;
	function Product_model(){
		parent::Model();		
	}
	function add(){
		$product = array()    ;
		$product['idcategory'] =  $this->idcategory ;	
		$product['image'] =  $this->image ;
		$product['name'] =  $this->name ;
		$product['code'] =  $this->code ;
		$product['quality'] =  $this->quality ;						
		$product['description'] =  $this->description ;
		$product['price'] =  $this->price ;
		$product['flag_discounts'] =  $this->flag_discounts ;
		$product['flag_promotions'] =  $this->flag_promotions ;
		$product['flag_new'] =  $this->flag_new ;
		$product['lock'] =  $this->lock ;
		$product['create_date'] =  date("Y-m-d H:i:s"); 	
		if($this->db->insert('product', $product)){
			return true;
		}
		return false ; 
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('product')){			
			return true ;
		}
		return false ;	 		 
	}			
	function edit($id){
		$product = array()    ;
		$product['idcategory'] =  $this->idcategory ;	
		//$product['image'] =  $this->image ;
		$product['name'] =  $this->name ;
		$product['code'] =  $this->code ;
		$product['quality'] =  $this->quality ;						
		$product['description'] =  $this->description ;
		$product['price'] =  $this->price ;
		$product['lock'] =  $this->lock ;
		$product['create_date'] =  date("Y-m-d H:i:s"); 
		         
		$this->db->where('id', intval($id));		
		if($this->db->update('product', $product)){
			return true ;
		}
		return false ;		 
	}
	function discount($id,$check){
		$product = array()    ;
		$product['flag_discounts'] =  $check ;	
		$this->db->where('id', intval($id));		
		if($this->db->update('product', $product)){
			return true ;
		}
		return false ;		 
	}
	function promotion($id,$check){
		$product = array()    ;
		$product['flag_promotions'] =  $check ;	
		$this->db->where('id', intval($id));		
		if($this->db->update('product', $product)){
			return true ;
		}
		return false ;		 
	}
	function newproduct($id,$check){
		$product = array()    ;
		$product['flag_new'] =  $check ;	
		$this->db->where('id', intval($id));		
		if($this->db->update('product', $product)){
			return true ;
		}
		return false ;		 
	}
	function get_product_id($id){
		$query  = '' ;
		$query .= '	SELECT `id` ' ;		
		$query .= '	FROM product ' ;				
		$query .= '	WHERE `id` = '. intval($id);
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0] ;
		}
		return false ;
	}	
	function get_productid($id){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`idcategory` , ' ;
		$query .= '		`image` , ' ;
		$query .= '		`name` , ' ;
		$query .= '		`code` , ' ;	
		$query .= '		`quality` , ' ;
		$query .= '		`description` , ' ;
		$query .= '		`price` , ' ;		
		$query .= '		`flag_discounts` , ' ;		
		$query .= '		`flag_promotions` ,' ;
		$query .= '		`flag_new` , ' ;
		$query .= '		`lock` ' ;
		$query .= '	FROM product  ' ;				
		$query .= '	WHERE `id` = '. intval($id);
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0] ;
		}
		return false ;
	}	
/*
SELECT * 
FROM (

SELECT a.id AS idmenu,a.name as namemenu, b.id AS idcategorytmp, b.name AS namecategory
FROM menu a
LEFT OUTER JOIN category b ON b.idmenu = a.id
ORDER BY a.id ASC , b.id ASC 
) AS Tmp
LEFT OUTER JOIN product c ON ( c.idcategory = Tmp.idcategorytmp ) 
OR (
left( c.idcategory, 1 ) = 'm'
AND right( c.idcategory, length( c.idcategory ) -1 ) = Tmp.idmenu)
)
*/
	function get_product($page = 0){
		$query  = '' ;
		$query .= ' SELECT * ' ;
		$query .= '	FROM (SELECT a.id as idmenu,a.name as namemenu, b.id AS idcategorytmp, b.name AS namecategory ' ;
		$query .= '	      FROM menu a LEFT OUTER JOIN category b ON b.idmenu = a.id ' ;
		$query .= '	      ORDER BY a.id ASC , b.id ASC ' ;		
		$query .= '	     ) AS Tmp ' ;								
		$query .= '	LEFT OUTER JOIN product c ON ( c.idcategory = Tmp.idcategorytmp) ' ;		
		$query .= " OR (left( c.idcategory, 1 ) = 'm' AND right( c.idcategory, length( c.idcategory ) -1 ) = Tmp.idmenu) " ;	
		$query .= '	LIMIT '. $page . ',' . NUM_RECORD_ON_PAGE  ;
	
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}
	function get_total_rows(){
		$query  = '' ;
		$query .= ' SELECT count( idmenu ) total ' ;
		$query .= '	FROM (SELECT a.id as idmenu, b.id AS idcategorytmp ' ;
		$query .= '	      FROM menu a LEFT OUTER JOIN category b ON b.idmenu = a.id ' ;
		$query .= '	      ORDER BY a.id ASC , b.id ASC ' ;		
		$query .= '	     ) AS Tmp ' ;								
		$query .= '	LEFT OUTER JOIN product c ON ( c.idcategory = Tmp.idcategorytmp) ' ;		
		$query .= " OR (left( c.idcategory, 1 ) = 'm' AND right( c.idcategory, length( c.idcategory ) -1 ) = Tmp.idmenu) " ; 
				
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
	function get_idmenu($idmenu){
		$query  = '' ;
		$query .= '	SELECT a.id ' ;
		$query .= ' FROM menu a, product b ' ;	
		$query .= "	WHERE a.id =".$idmenu." and left( b.idcategory, 1 ) = 'm' AND a.id = right( b.idcategory, length( b.idcategory ) -1 ) " ;	
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}	
	function get_idcategory($idcategory){
		$query  = '' ;
		$query .= '	SELECT id ' ;
		$query .= ' FROM product  ' ;	
		$query .= '	WHERE idcategory ='.$idcategory ;	
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}	
	function get_product_promotion(){
		$query  = '' ;
		$query .= '	SELECT * ' ;		
		$query .= '	FROM product ' ;				
		$query .= '	WHERE flag_promotions = 1 ';
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}	
	function get_product_discount(){
		$query  = '' ;
		$query .= '	SELECT * ' ;		
		$query .= '	FROM product ' ;				
		$query .= '	WHERE flag_discounts = 1 ';
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}	
	function get_product_new(){
		$query  = '' ;
		$query .= '	SELECT * ' ;		
		$query .= '	FROM product ' ;				
		$query .= '	WHERE flag_new = 1 ';
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}	
	
/*
SELECT * 
FROM (

SELECT a.id AS idmenu, a.name AS namemenu, b.id AS idcategorytmp, b.name AS namecategory
FROM menu a
LEFT OUTER JOIN category b ON b.idmenu = a.id
ORDER BY a.id ASC , b.id ASC 
) AS Tmp
LEFT OUTER JOIN product c ON ( c.idcategory = Tmp.idcategorytmp ) 
OR (
left( c.idcategory, 1 ) = 'm'
AND right( c.idcategory, length( c.idcategory ) -1 ) = Tmp.idmenu
)
WHERE c.id IS NOT NULL 
*/
	
	function get_productmain($page = 0){
		$query  = '' ;
		$query .= ' SELECT * ' ;
		$query .= '	FROM (SELECT a.id as idmenu,a.name as namemenu, b.id AS idcategorytmp, b.name AS namecategory ' ;
		$query .= '	      FROM menu a LEFT OUTER JOIN category b ON b.idmenu = a.id ' ;
		$query .= '	      ORDER BY a.id ASC , b.id ASC ' ;		
		$query .= '	     ) AS Tmp ' ;								
		$query .= '	LEFT OUTER JOIN product c ON ( c.idcategory = Tmp.idcategorytmp) ' ;		
		$query .= " OR (left( c.idcategory, 1 ) = 'm' AND right( c.idcategory, length( c.idcategory ) -1 ) = Tmp.idmenu) " ;
		$query .= '	WHERE c.id IS NOT NULL ';	
		$query .= '	LIMIT '. $page . ',' . NUM_RECORD_ON_PAGE  ;
	
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}
	function get_total_rowsmain(){
		$query  = '' ;
		$query .= ' SELECT count( idmenu ) total ' ;
		$query .= '	FROM (SELECT a.id as idmenu, b.id AS idcategorytmp ' ;
		$query .= '	      FROM menu a LEFT OUTER JOIN category b ON b.idmenu = a.id ' ;
		$query .= '	      ORDER BY a.id ASC , b.id ASC ' ;		
		$query .= '	     ) AS Tmp ' ;								
		$query .= '	LEFT OUTER JOIN product c ON ( c.idcategory = Tmp.idcategorytmp) ' ;		
		$query .= " OR (left( c.idcategory, 1 ) = 'm' AND right( c.idcategory, length( c.idcategory ) -1 ) = Tmp.idmenu) " ; 
		$query .= '	WHERE c.id IS NOT NULL ';		
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
	
	function get_productcategory($id='',$page = 0){
		$query  = '' ;
		$query .= ' SELECT * ' ;
		$query .= '	FROM product ' ;								
		$query .= "	WHERE idcategory = '".$id."' ";	
		$query .= '	LIMIT '. $page . ',' . NUM_RECORD_ON_PAGE  ;
	
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows ;
		}
		return false ;
	}
	function get_total_rowscategory($id=''){
		$query  = '' ;
		$query .= ' SELECT count( id ) total ' ;
		$query .= '	FROM product ' ;								
		$query .= "	WHERE idcategory = '".$id."' ";		
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
}
?>