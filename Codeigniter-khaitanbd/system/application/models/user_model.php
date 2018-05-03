<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends Model{
	
	var $id  	  = null;
	var $username = null;
	var $email    = null;
	var $password = null;	
	var $lock     = null;
	
	function User_model(){
		parent::Model();		
	}
	function add(){
		$data = array( 'username' => $this->username ,						
			            'email' => $this->email ,
			            'password' => $this->password ,
			            'lock' => $this->lock 			             			            
			           );
		$this->db->insert('user', $data);  
	}
	function delete($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('user')){			
			return true ;
		}
		return false ;	 		 
	}			
	function get_user($page = 0){
		$query  = '' ;
		$query .= '	SELECT `id` , ' ;
		$query .= '		`username` , ' ;
		$query .= '		`email` , ' ;
		$query .= '		`password`  ' ;
		$query .= '		`lock`  ' ;		
		$query .= '	FROM user ' ;				
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
		$query .= '	FROM user ' ; 
				
		$result = $this->db->query($query);
		$rows = $result->result();
		if($rows) {
			return $rows[0]->total ;
		}
		return false ;
	}
}
?>