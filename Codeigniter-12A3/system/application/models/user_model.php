<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends Model{
	function User_model(){
		parent::Model();		
	}
	function add($avatar){
		$user = array();
		$user['nickname'] = $this->input->post('nickname');						
		$user['email'] = $this->input->post('email');						
		$user['password'] = md5($this->input->post('password'));						
		$user['fullname'] = $this->input->post('fullname');						
		$user['gender'] = $this->input->post('gender');						
		$user['birthday'] = $this->input->post('birthday');						
		$user['avatar'] = $avatar;
		$user['lock'] = 0;
		$user['permission'] = 0;
		$user['createdate'] = date('Y-m-d H:i:s');
		$user['editdate'] = date('Y-m-d H:i:s');
		if($this->db->insert('12a3_user', $user)){
			return true;
		}
		return false ;
	}
	function edit($avatar){
		$user = array();		
		$user['password'] = md5($this->input->post('password'));						
		$user['fullname'] = $this->input->post('fullname');						
		$user['gender'] = $this->input->post('gender');						
		$user['birthday'] = $this->input->post('birthday');						
		$user['avatar'] = $avatar;		
		$user['editdate'] = date('Y-m-d H:i:s');
		$this->db->where('id', intval($id));		
		if($this->db->update('12a3_user', $about)){
			return true ;
		}
		return false ;		 
	}	
	function delete($id){		
		$this->db->where('id', intval($id));			
		if ($this->db->delete('12a3_user')){			
			return true ;
		}
		return false ;	 		
	}
	function check_email($email){		
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	email '; 		 		
 		$query .= ' FROM 12a3_user '; 		
 		$query .= ' WHERE ';
 		$query .= ' 	email = ? ';
 		$result = $this->db->query($query, array($email)); 		
 		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return true;
		}
		return false;
 	}
 	function check_password($email,$password){		
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	email '; 		 		
 		$query .= ' FROM 12a3_user '; 		
 		$query .= ' WHERE ';
 		$query .= ' 	email = ? AND password = ? ';
 		$result = $this->db->query($query, array($email,$password)); 		
 		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return true;
		}
		return false;
 	}
 	function login($email=''){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		 		
 		$query .= ' 	nickname, '; 		 		
 		$query .= ' 	email, '; 		 		
 		$query .= ' 	password, '; 		 		
 		$query .= ' 	fullname, '; 		 		
 		$query .= ' 	gender, ';   		
 		$query .= ' 	birthday, ';  
 		$query .= ' 	avatar, ';   		 		
 		$query .= ' 	`lock`, ';   		
 		$query .= ' 	permission, ';   		
 		$query .= "    DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "    DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "    DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "    DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "    DATE_FORMAT(createdate, '%d-%m-%Y') createdate, ";
	 	$query .= "    DATE_FORMAT(editdate, '%d') edit_day,";
	 	$query .= "    DATE_FORMAT(editdate, '%m') edit_month,";
	 	$query .= "    DATE_FORMAT(editdate, '%Y') edit_year,";
	 	$query .= "    DATE_FORMAT(editdate, '%H:%i') edit_hour,"; 		
	 	$query .= "    DATE_FORMAT(editdate, '%d-%m-%Y') editdate ";		
 		$query .= ' FROM 12a3_user ';
 		$query .= ' WHERE email = ? ';  			
 		$result  = $this->db->query($query,array($email));
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
 	function getID($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		 		
 		$query .= ' 	nickname, '; 		 		
 		$query .= ' 	email, '; 		 		
 		$query .= ' 	password, '; 		 		
 		$query .= ' 	fullname, '; 		 		
 		$query .= ' 	gender, ';   		
 		$query .= ' 	birthday, ';  
 		$query .= ' 	avatar, ';   		 		
 		$query .= ' 	lock, ';   		
 		$query .= ' 	permission, ';   		
 		$query .= "    DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "    DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "    DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "    DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "    DATE_FORMAT(createdate, '%d-%m-%Y') createdate, ";
	 	$query .= "    DATE_FORMAT(editdate, '%d') edit_day,";
	 	$query .= "    DATE_FORMAT(editdate, '%m') edit_month,";
	 	$query .= "    DATE_FORMAT(editdate, '%Y') edit_year,";
	 	$query .= "    DATE_FORMAT(editdate, '%H:%i') edit_hour,"; 		
	 	$query .= "    DATE_FORMAT(editdate, '%d-%m-%Y') editdate ";		
 		$query .= ' FROM 12a3_user ';
 		$query .= ' WHERE id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
 	function getAll(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		 		
 		$query .= ' 	nickname, '; 		 		
 		$query .= ' 	email, '; 		 		
 		$query .= ' 	password, '; 		 		
 		$query .= ' 	fullname, '; 		 		
 		$query .= ' 	gender, ';   		
 		$query .= ' 	birthday, ';  
 		$query .= ' 	avatar, ';   		 		
 		$query .= ' 	`lock`, ';   		
 		$query .= ' 	permission, ';   		
 		$query .= "    DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "    DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "    DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "    DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "    DATE_FORMAT(createdate, '%d-%m-%Y') createdate, ";
	 	$query .= "    DATE_FORMAT(editdate, '%d') edit_day,";
	 	$query .= "    DATE_FORMAT(editdate, '%m') edit_month,";
	 	$query .= "    DATE_FORMAT(editdate, '%Y') edit_year,";
	 	$query .= "    DATE_FORMAT(editdate, '%H:%i') edit_hour,"; 		
	 	$query .= "    DATE_FORMAT(editdate, '%d-%m-%Y') editdate ";		
 		$query .= ' FROM 12a3_user ';
 		$query .= ' WHERE permission = 0 '; 
 		$query .= ' ORDER BY nickname ASC';
 		//$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getAllAdmin($page=0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		 		
 		$query .= ' 	nickname, '; 		 		
 		$query .= ' 	email, '; 		 		
 		$query .= ' 	password, '; 		 		
 		$query .= ' 	fullname, '; 		 		
 		$query .= ' 	gender, ';   		
 		$query .= ' 	birthday, ';  
 		$query .= ' 	avatar, ';   		 		
 		$query .= ' 	`lock`, ';   		
 		$query .= ' 	permission, ';   		
 		$query .= "    DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "    DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "    DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "    DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "    DATE_FORMAT(createdate, '%d-%m-%Y') createdate, ";
	 	$query .= "    DATE_FORMAT(editdate, '%d') edit_day,";
	 	$query .= "    DATE_FORMAT(editdate, '%m') edit_month,";
	 	$query .= "    DATE_FORMAT(editdate, '%Y') edit_year,";
	 	$query .= "    DATE_FORMAT(editdate, '%H:%i') edit_hour,"; 		
	 	$query .= "    DATE_FORMAT(editdate, '%d-%m-%Y') editdate ";		
 		$query .= ' FROM 12a3_user '; 		
 		$query .= ' ORDER BY id ASC';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getTotalRows(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM 12a3_user '; 	
 		$query .= ' WHERE permission = 0 '; 		 			 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}	
 	function getTotalRowsAdmin(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM 12a3_user '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}		
}
?>
