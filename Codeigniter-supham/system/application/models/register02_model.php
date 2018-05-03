<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Register02_model extends Model{
	function Register02_model(){
		parent::Model();		
	}
	function addRegister02($strAvatar){
		$register02 = array();
		$register02['name'] = $this->input->post('registerName');
		$register02['gender'] = $this->input->post('gender');
		$register02['birthday'] = $this->input->post('birthday');
		$register02['address'] = $this->input->post('address');
		$register02['email'] = $this->input->post('email');
		$register02['password'] = md5($this->input->post('password')); 	 	 	 	 	 	 
		$register02['avatar'] = $strAvatar;
		$register02['registerdate'] = date('Y-m-d H:i:s');
		$register02['editdate'] = date('Y-m-d H:i:s'); 	 	 	 	 	 	 
		$register02['activation'] = 1; 	 	 	 	 	 	 
		$register02['permission'] = 0; 	 	 
		$register02['id_provinces'] = $this->input->post('id_provinces');
		$register02['id_districts'] = $this->input->post('id_districts');
		$register02['placeofbirth'] = $this->input->post('placeofbirth');
		$register02['telephone'] = $this->input->post('telephone');
		$register02['mobilephone'] = $this->input->post('mobilephone');
		$register02['id_diploma'] = $this->input->post('id_diploma');
		$register02['id_school'] = $this->input->post('id_school');
		$register02['specialized'] = $this->input->post('specialized');
		$register02['graduate'] = $this->input->post('graduate');
		$register02['type'] = $this->input->post('type');
		$register02['id_level_from'] = $this->input->post('id_level_from');
		$register02['id_level_to'] = $this->input->post('id_level_to');
		$register02['subjects'] = $this->input->post('subjects');
		$register02['area_teach'] = $this->input->post('area_teach');
		$register02['time_teach'] = $this->input->post('time_teach');
		$register02['salary'] = $this->input->post('salary');
		$register02['description'] = $this->input->post('description');
		$register02['lock'] = 0;
		$register02['typical'] = 0;
		if($this->db->insert('user02', $register02)){
			return true;
		}
		return false ;
	}
	function changeInforRegister02($strAvatar){
		$register02 = array();
		$register02['name'] = $this->input->post('registerName');
		$register02['gender'] = $this->input->post('gender');
		$register02['birthday'] = $this->input->post('birthday');
		$register02['address'] = $this->input->post('address');
		$register02['email'] = $this->session->userdata('user')->email;
		$register02['password'] = md5($this->input->post('newpassword')); 	 	 	 	 	 	 
		$register02['avatar'] = $strAvatar;
		$register02['registerdate'] = date('Y-m-d H:i:s');
		$register02['editdate'] = date('Y-m-d H:i:s'); 	 	 	 	 	 	 
		$register02['activation'] = $this->session->userdata('user')->activation; 	 	 	 	 	 	 
		$register02['permission'] = $this->session->userdata('user')->permission; 	 	 
		$register02['id_provinces'] = $this->input->post('id_provinces');
		$register02['id_districts'] = $this->input->post('id_districts');
		$register02['placeofbirth'] = $this->input->post('placeofbirth');
		$register02['telephone'] = $this->input->post('telephone');
		$register02['mobilephone'] = $this->input->post('mobilephone');
		$register02['id_diploma'] = $this->input->post('id_diploma');
		$register02['id_school'] = $this->input->post('id_school');
		$register02['specialized'] = $this->input->post('specialized');
		$register02['graduate'] = $this->input->post('graduate');
		$register02['type'] = $this->input->post('type');
		$register02['id_level_from'] = $this->input->post('id_level_from');
		$register02['id_level_to'] = $this->input->post('id_level_to');
		$register02['subjects'] = $this->input->post('subjects');
		$register02['area_teach'] = $this->input->post('area_teach');
		$register02['time_teach'] = $this->input->post('time_teach');
		$register02['salary'] = $this->input->post('salary');
		$register02['description'] = $this->input->post('description');
		$register02['lock'] = $this->session->userdata('user')->lock;
		$register02['typical'] = $this->session->userdata('user')->typical;
		if($this->db->insert('user02', $register02)){
			return true;
		}
		return false ;
	}
	function editAvatarRegister02(){
		$register = array()    ;
		$register['avatar'] = '';
		$this->db->where('email', $this->session->userdata('user')->email);		
		if($this->db->update('user02', $register)){
			return true ;
		}
		return false ;		 
	}
	function changePassword($id){
		$register02 = array()    ;
		$register02['password'] = md5($this->input->post('newpassword')) ;
		$this->db->where('id', intval($id));		
		if($this->db->update('user02', $register02)){
			return true ;
		}
		return false ;		 
	}
	function deleteRegister02($id){		
		$this->db->where('id', intval($id));	
		$this->db->where('permission',0);		
		if ($this->db->delete('user02')){			
			return true ;
		}
		return false ;	 		
	}
	function checkEmail($email){		
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	email '; 		 		
 		$query .= ' FROM user02 '; 		
 		$query .= ' WHERE ';
 		$query .= ' 	email = ? ';
 		$result = $this->db->query($query, array($email)); 		
 		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return true;
		}
		return false;
 	}
	function loginAdmin(){	
		$email = $this->input->post('email') ; 
		$password = md5($this->input->post('password')) ; 
		$query = '';
 		$query .= ' SELECT * '; 		 
 		$query .= ' FROM user02';
 		$query .= ' WHERE ';
 		$query .= ' 	email = ? ';		
 		$query .= ' 	AND password = ? AND permission = 1 ';
 		$result = $this->db->query($query, array($email, $password));
 		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0] ;
		}
		return null;
 	}	
	function allRegister02($page = 0){
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
 		$query .= ' FROM user02 a ';
 		$query .= '     LEFT OUTER JOIN school b ON b.id = a.id_school ';
 		$query .= '     LEFT OUTER JOIN level c ON c.id = a.id_level_from ';
 		$query .= '     LEFT OUTER JOIN level d ON d.id = a.id_level_to ';
 		$query .= '     LEFT OUTER JOIN districts e ON e.id = a.id_districts ';
 		$query .= '     LEFT OUTER JOIN provinces f ON f.id = a.id_provinces ';
 		$query .= ' WHERE a.permission = 0 AND `lock`=1 ';
 		$query .= ' ORDER BY a.editdate DESC';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function searchAllRegister02($page = 0){
		$type = $this->input->post('type');
		$id_school = $this->input->post('id_school');
		$gender = $this->input->post('gender');
		$id_level = $this->input->post('id_level');
		$where = '';
		if($gender!=3)
			$where = $where.' AND a.gender = '.$gender;
		if($id_level!=0)
			$where = $where.' AND a.id_level_from = '.$id_level.' OR a.id_level_to = '.$id_level;
		if($id_school!=1)	
			$where = $where.' AND a.id_school = '.$id_school;
		$where = $where.' AND a.type = '.$type;		
		$where = $where.' ';
		
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
 		$query .= ' FROM user02 a ';
 		$query .= '     LEFT OUTER JOIN school b ON b.id = a.id_school ';
 		$query .= '     LEFT OUTER JOIN level c ON c.id = a.id_level_from ';
 		$query .= '     LEFT OUTER JOIN level d ON d.id = a.id_level_to ';
 		$query .= '     LEFT OUTER JOIN districts e ON e.id = a.id_districts ';
 		$query .= '     LEFT OUTER JOIN provinces f ON f.id = a.id_provinces ';
 		$query .= ' WHERE a.permission = 0 AND `lock`=1 '.$where;
 		$query .= ' ORDER BY a.editdate DESC';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function searchAllIndexRegister02($page=0,$type=0,$id_school=0,$gender=0,$id_level=0){		
		$where = '';
		if($gender!=3)
			$where = $where.' AND a.gender = '.$gender;
		if($id_level!=0)
			$where = $where.' AND a.id_level_from = '.$id_level.' OR a.id_level_to = '.$id_level;
		if($id_school!=1)	
			$where = $where.' AND a.id_school = '.$id_school;
		$where = $where.' AND a.type = '.$type;		
		$where = $where.' ';
		
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
 		$query .= ' FROM user02 a ';
 		$query .= '     LEFT OUTER JOIN school b ON b.id = a.id_school ';
 		$query .= '     LEFT OUTER JOIN level c ON c.id = a.id_level_from ';
 		$query .= '     LEFT OUTER JOIN level d ON d.id = a.id_level_to ';
 		$query .= '     LEFT OUTER JOIN districts e ON e.id = a.id_districts ';
 		$query .= '     LEFT OUTER JOIN provinces f ON f.id = a.id_provinces ';
 		$query .= ' WHERE a.permission = 0 AND `lock`=1 '.$where;
 		$query .= ' ORDER BY a.editdate DESC';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		
 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	
	function allRegister02Admin($page = 0){
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
 		$query .= ' FROM user02 a ';
 		$query .= '     LEFT OUTER JOIN school b ON b.id = a.id_school ';
 		$query .= '     LEFT OUTER JOIN level c ON c.id = a.id_level_from ';
 		$query .= '     LEFT OUTER JOIN level d ON d.id = a.id_level_to '; 
 		$query .= '     LEFT OUTER JOIN districts e ON e.id = a.id_districts ';
 		$query .= '     LEFT OUTER JOIN provinces f ON f.id = a.id_provinces ';	
 		$query .= ' WHERE a.permission = 0 ';	
 		$query .= ' ORDER BY a.editdate DESC';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getRegister02($id){
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
 		$query .= ' FROM user02 a ';
 		$query .= '     LEFT OUTER JOIN school b ON b.id = a.id_school ';
 		$query .= '     LEFT OUTER JOIN level c ON c.id = a.id_level_from ';
 		$query .= '     LEFT OUTER JOIN level d ON d.id = a.id_level_to ';
 		$query .= '     LEFT OUTER JOIN provinces e ON e.id = a.placeofbirth '; 
 		$query .= '     LEFT OUTER JOIN districts f ON e.id = a.id_districts ';
 		$query .= '     LEFT OUTER JOIN provinces g ON f.id = a.id_provinces ';	
 		$query .= ' WHERE a.permission = 0 AND `lock`=1 AND a.id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
	function getRegister02Admin($id){
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
 		$query .= ' FROM user02 a ';
 		$query .= '     LEFT OUTER JOIN school b ON b.id = a.id_school ';
 		$query .= '     LEFT OUTER JOIN level c ON c.id = a.id_level_from ';
 		$query .= '     LEFT OUTER JOIN level d ON d.id = a.id_level_to ';
 		$query .= '     LEFT OUTER JOIN provinces e ON e.id = a.placeofbirth '; 
 		$query .= '     LEFT OUTER JOIN districts f ON e.id = a.id_districts ';
 		$query .= '     LEFT OUTER JOIN provinces g ON f.id = a.id_provinces ';	
 		$query .= ' WHERE a.id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
	function editLock($id=0,$lock=0){
		$register02 = array();
		if($lock==0)
			$lock=1;
		else
			$lock=0;
		$register02['lock'] = $lock;
		$this->db->where('id', intval($id));		
		if($this->db->update('user02', $register02)){
			return true ;
		}
		return false ;			
	}
	function getTotalRows(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM user02 '; 		
 		$query .= ' WHERE `lock`=1 ';
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
	function searchAllgetTotalRows(){
		$type = $this->input->post('type');
		$id_school = $this->input->post('id_school');
		$gender = $this->input->post('gender');
		$id_level = $this->input->post('id_level');
		$where = '';
		if($gender!=3)
			$where = $where.' AND gender = '.$gender;
		if($id_level!=0)
			$where = $where.' AND id_level_from = '.$id_level.' OR id_level_to = '.$id_level;
		if($id_school!=1)	
			$where = $where.' AND id_school = '.$id_school;
		$where = $where.' AND type = '.$type;		
		$where = $where.' ';
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM user02 '; 		
 		$query .= ' WHERE `lock`=1 '.$where;
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function searchAllIndexgetTotalRows($type=0,$id_school=0,$gender=0,$id_level=0){
		
		$where = '';
		if($gender!=3)
			$where = $where.' AND gender = '.$gender;
		if($id_level!=0)
			$where = $where.' AND id_level_from = '.$id_level.' OR id_level_to = '.$id_level;
		if($id_school!=1)	
			$where = $where.' AND id_school = '.$id_school;
		$where = $where.' AND type = '.$type;		
		$where = $where.' ';
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM user02 '; 		
 		$query .= ' WHERE `lock`=1 '.$where;
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
 		$query .= ' FROM user02 '; 	
 		$query .= ' WHERE permission = 0 ';		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
	function checkDateYMD($value){
		$date = explode('-',$value);
		if(count($date)!=3) return null;
		if((!is_numeric($date[0]))||(!is_numeric($date[1]))||(!is_numeric($date[2]))) return null;
		
		if(checkdate($date[0],$date[1],$date[2]))
			return $date[2].'-'.$date[0].'-'.$date[1];
		else
			return null;
	}
}
?>