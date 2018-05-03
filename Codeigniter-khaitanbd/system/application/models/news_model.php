<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class News_model extends Model{
	var $id  	     = null;
	var $title       = null;
	var $description = null;	
	var $lock        = null;
	var $idsort      = null;
	function News_model(){
		parent::Model();		
	}
	function add(){
		$news = array()    ;
		$news['title'] =  $this->title ;	
		$news['description'] =  $this->description ;
		$news['lock'] =  $this->lock ;						
		$news['idsort'] =  News_model::getMaxOrder() ;
		$news['create_date'] =  date("Y-m-d H:i:s"); 	
		if($this->db->insert('news', $news)){
			return true;
		}
		return false ;
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('news')){			
			return true ;
		}
		return false ;	 		 
	}	
	function edit($id){
		$data = array( 'title' => $this->title ,						
			            'description' => $this->description ,
			            'create_date' => date("Y-m-d H:i:s"),
			            'lock' => $this->lock					      	               			           
			           );     
		$this->db->where('id', intval($id));		
		if($this->db->update('news', $data)){
			return true ;
		}
		return false ;		 
	}
	function get_news_id($id){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`title` , ' ;
		$query .= '		`description` , ' ;	
		$query .= '		`lock` , ' ;
		$query .= '		`idsort` , ' ;	
		$query .= "     DATE_FORMAT(create_date, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(create_date, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(create_date, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(create_date, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(create_date, '%d-%m-%Y') createdate ,";
	 	$query .= '		`lock` ' ;		
		$query .= '	FROM news ' ;				
		$query .= '	WHERE `id` = '. intval($id);
		
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0] ;
		}
		return false ;
	}			
	function get_news($page = 0){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`title` , ' ;
		$query .= '		`description` , ' ;	
		$query .= '		`lock` , ' ;
		$query .= '		`idsort` , ' ;	
		$query .= "     DATE_FORMAT(create_date, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(create_date, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(create_date, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(create_date, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(create_date, '%d-%m-%Y') createdate ,";
	 	$query .= '		`lock` ' ;	
		$query .= '	FROM news ' ;				
		$query .= '	ORDER BY id DESC LIMIT '. $page . ',' . NUM_RECORD_ON_PAGE  ;
		
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
		$query .= '	FROM news ' ; 
				
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
	function getMaxOrder(){
 		$this->db->select_max('`idsort`');
		$this->db->from('news');		
		$query  = $this->db->get();
		$arrMax = $query->result() ;
		if ( ( $arrMax ) && (is_array($arrMax) ) ){
			return ($arrMax[0]->idsort +1);
		} 
		else{
			return 0 ;
		}
 	}
}
?>