<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Teacher_online_model extends Model{
	function Teacher_online_model(){
		parent::Model();		
	}
	function addTeacher_online($id_user=0){
		$teacher_online = array();
		$teacher_online['id_user'] = intval($id_user);
		$teacher_online['activation'] = 1; 	 
		$teacher_online['createdate'] = date('Y-m-d H:i:s');				
		if($this->db->insert('teacher_online', $teacher_online)){
			return true;
		}
		return false ;
	}	
	function deleteTeacher_online($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('teacher_online')){			
			return true ;
		}
		return false ;	 
	}
	function deleteUser($id_user){
		$this->db->where('id_user', intval($id_user));		
		if ($this->db->delete('teacher_online')){			
			return true ;
		}
		return false ;	 
	}
	function getTeacher_online($id_user){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	a.id, ';
 		$query .= ' 	a.name,a.gender, '; 
 		$query .= "     DATE_FORMAT(a.birthday, '%d') birthday_day,";
	 	$query .= "     DATE_FORMAT(a.birthday, '%m') birthday_month,";
	 	$query .= "     DATE_FORMAT(a.birthday, '%Y') birthday_year,";	 		
 		$query .= ' 	a.birthday,a.address,a.email, '; 
 		$query .= ' 	a.avatar,a.registerdate, '; 
 		$query .= ' 	a.editdate,a.activation,a.permission, '; 
 		$query .= ' 	a.id_provinces,a.id_districts,a.placeofbirth,e.name AS placeofbirthName, '; 
 		$query .= ' 	f.name AS districtsName,g.name AS provincesName, ';
 		$query .= ' 	a.telephone,a.mobilephone, '; 
 		$query .= ' 	a.id_diploma,a.id_school, ';
 		$query .= ' 	b.name AS schoolName, '; 
 		$query .= ' 	a.specialized,a.graduate, '; 
 		$query .= "     DATE_FORMAT(a.graduate, '%d') birthday_day,";
	 	$query .= "     DATE_FORMAT(a.graduate, '%m') birthday_month,";
	 	$query .= "     DATE_FORMAT(a.graduate, '%Y') graduate_year,";	
 		$query .= ' 	a.type,a.id_level_from,a.id_level_to, ';
 		$query .= ' 	c.name AS level_from_name,d.name AS level_to_name, ';
 		$query .= ' 	a.subjects,a.area_teach, '; 
 		$query .= ' 	a.time_teach,a.salary, ';
 		$query .= ' 	a.description,a.lock,a.typical ';
 		$query .= ' FROM user a ';
 		$query .= '     LEFT OUTER JOIN school b ON b.id = a.id_school ';
 		$query .= '     LEFT OUTER JOIN level c ON c.id = a.id_level_from ';
 		$query .= '     LEFT OUTER JOIN level d ON d.id = a.id_level_to ';
 		$query .= '     LEFT OUTER JOIN provinces e ON e.id = a.placeofbirth '; 
 		$query .= '     LEFT OUTER JOIN districts f ON e.id = a.id_districts ';
 		$query .= '     LEFT OUTER JOIN provinces g ON f.id = a.id_provinces ';	
 		$query .= ' WHERE a.permission = 0 AND `lock`=0 AND a.id = '.intval($id_user);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;		
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
	function allTeacher_online($page = 0){
		$query = '';
 		$query .= ' SELECT g.id AS id_teacher_online, ';
 		$query .= ' 	a.id, ';
 		$query .= ' 	a.name,a.gender, '; 
 		$query .= "     DATE_FORMAT(a.birthday, '%d') birthday_day,";
	 	$query .= "     DATE_FORMAT(a.birthday, '%m') birthday_month,";
	 	$query .= "     DATE_FORMAT(a.birthday, '%Y') birthday_year,";	 		
 		$query .= ' 	a.birthday,a.address,a.email, '; 
 		$query .= ' 	a.avatar,a.registerdate, '; 
 		$query .= ' 	a.editdate,a.activation,a.permission, '; 
 		$query .= ' 	a.id_provinces,a.id_districts,a.placeofbirth, '; 
 		$query .= ' 	e.name AS districtsName,f.name AS provincesName, '; 
 		$query .= ' 	a.telephone,a.mobilephone, '; 
 		$query .= ' 	a.id_diploma,a.id_school, ';
 		$query .= ' 	b.name AS schoolName, '; 
 		$query .= ' 	a.specialized,a.graduate, '; 
 		$query .= ' 	a.type,a.id_level_from,a.id_level_to, ';
 		$query .= ' 	c.name AS level_from_name,d.name AS level_to_name, ';
 		$query .= ' 	a.subjects,a.area_teach, '; 
 		$query .= ' 	a.time_teach,a.salary, ';
 		$query .= ' 	a.description,a.lock,a.typical ';
 		$query .= ' FROM teacher_online g, user a '; 		
 		$query .= '     LEFT OUTER JOIN school b ON b.id = a.id_school ';
 		$query .= '     LEFT OUTER JOIN level c ON c.id = a.id_level_from ';
 		$query .= '     LEFT OUTER JOIN level d ON d.id = a.id_level_to '; 
 		$query .= '     LEFT OUTER JOIN districts e ON e.id = a.id_districts ';
 		$query .= '     LEFT OUTER JOIN provinces f ON f.id = a.id_provinces ';	 		
		$query .= ' WHERE g.id_user =a.id AND a.permission = 0 AND `lock`=0';	 			
 		$query .= ' ORDER BY a.editdate DESC';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15); 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}			
	function allTeacher_onlineAdmin($page = 0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	a.id, ';
 		$query .= ' 	a.name,a.gender, '; 
 		$query .= "     DATE_FORMAT(a.birthday, '%d') birthday_day,";
	 	$query .= "     DATE_FORMAT(a.birthday, '%m') birthday_month,";
	 	$query .= "     DATE_FORMAT(a.birthday, '%Y') birthday_year,";	 		
 		$query .= ' 	a.birthday,a.address,a.email, '; 
 		$query .= ' 	a.avatar,a.registerdate, '; 
 		$query .= ' 	a.editdate,a.activation,a.permission, '; 
 		$query .= ' 	a.id_provinces,a.id_districts,a.placeofbirth, '; 
 		$query .= ' 	e.name AS districtsName,f.name AS provincesName, '; 
 		$query .= ' 	a.telephone,a.mobilephone, '; 
 		$query .= ' 	a.id_diploma,a.id_school, ';
 		$query .= ' 	b.name AS schoolName, '; 
 		$query .= ' 	a.specialized,a.graduate, '; 
 		$query .= ' 	a.type,a.id_level_from,a.id_level_to, ';
 		$query .= ' 	c.name AS level_from_name,d.name AS level_to_name, ';
 		$query .= ' 	a.subjects,a.area_teach, '; 
 		$query .= ' 	a.time_teach,a.salary, ';
 		$query .= ' 	a.description,a.lock,a.typical ';
 		$query .= ' FROM user a ';
 		$query .= '     LEFT OUTER JOIN school b ON b.id = a.id_school ';
 		$query .= '     LEFT OUTER JOIN level c ON c.id = a.id_level_from ';
 		$query .= '     LEFT OUTER JOIN level d ON d.id = a.id_level_to '; 
 		$query .= '     LEFT OUTER JOIN districts e ON e.id = a.id_districts ';
 		$query .= '     LEFT OUTER JOIN provinces f ON f.id = a.id_provinces ';	 		
		$query .= ' WHERE a.permission = 0 AND `lock`=0 AND a.id NOT IN(SELECT g.id_user FROM teacher_online g)';	 			
 		$query .= ' ORDER BY a.editdate DESC';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
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
 		$query .= ' 	count(a.id) AS TotalRows '; 		
 		$query .= ' FROM teacher_online  a';  
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
 		$query .= ' 	count(a.id) AS TotalRows '; 		
 		$query .= ' FROM user a';  		
 		$query .= ' WHERE a.permission = 0 AND `lock`=0 AND a.id NOT IN(SELECT g.id_user FROM teacher_online g)';		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}	
}
?>