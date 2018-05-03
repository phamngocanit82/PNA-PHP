<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Register_model extends Model{
	function Register_model(){
		parent::Model();
		$this->load->model('teacher_online_model');	
		$this->load->model('teacher_pure_model');	
		$this->load->model('teacher_quality_model');			
	}
	function addRegister($strAvatar){
		$register = array();
		$register['name'] = $this->input->post('registerName');
		$register['gender'] = $this->input->post('gender');
		//$register['birthday'] = Register_model::checkDateYMD($this->input->post('birthday'));
		//if(!$register['birthday'])
		//	$register['birthday'] = date('Y-m-d H:i:s');
		$register['birthday'] = $this->input->post('birthday');
		$register['address'] = $this->input->post('address');
		$register['email'] = $this->input->post('email');
		$register['password'] = md5($this->input->post('password')); 	 	 	 	 	 	 
		$register['avatar'] = $strAvatar;
		$register['registerdate'] = date('Y-m-d H:i:s');
		$register['editdate'] = date('Y-m-d H:i:s'); 	 	 	 	 	 	 
		$register['activation'] = 1; 	 	 	 	 	 	 
		$register['permission'] = 0; 	 	 
		$register['id_provinces'] = $this->input->post('id_provinces');
		$register['id_districts'] = $this->input->post('id_districts');
		$register['placeofbirth'] = $this->input->post('placeofbirth');
		$register['telephone'] = $this->input->post('telephone');
		$register['mobilephone'] = $this->input->post('mobilephone');
		$register['id_diploma'] = $this->input->post('id_diploma');
		$register['id_school'] = $this->input->post('id_school');
		$register['specialized'] = $this->input->post('specialized');
		//$register['graduate'] = Register_model::checkDateYMD($this->input->post('graduate'));
		//if(!$register['graduate'])
		//	$register['graduate'] = date('Y-m-d H:i:s');
		$register['graduate'] = $this->input->post('graduate');
		$register['type'] = $this->input->post('type');
		$register['id_level_from'] = $this->input->post('id_level_from');
		$register['id_level_to'] = $this->input->post('id_level_to');
		$register['subjects'] = $this->input->post('subjects');
		$register['area_teach'] = $this->input->post('area_teach');
		$register['time_teach'] = $this->input->post('time_teach');
		$register['salary'] = $this->input->post('salary');
		$register['description'] = $this->input->post('description');
		$register['lock'] = 0;
		$register['typical'] = 0;
		if($this->db->insert('user', $register)){
			return true;
		}
		return false ;
	}
	function editRegister($strAvatar){
		$register = array()    ;
		$register['name'] = $this->input->post('registerName');
		$register['gender'] = $this->input->post('gender');
		$register['birthday'] = $this->input->post('birthday');
		$register['address'] = $this->input->post('address');
		$register['password'] = md5($this->input->post('newpassword')); 	 	 	 	 	 	 
		$register['avatar'] = $strAvatar;
		$register['registerdate'] = date('Y-m-d H:i:s');
		$register['editdate'] = date('Y-m-d H:i:s'); 	 	 	 	 	 	 
		$register['id_provinces'] = $this->input->post('id_provinces');
		$register['id_districts'] = $this->input->post('id_districts');
		$register['placeofbirth'] = $this->input->post('placeofbirth');
		$register['telephone'] = $this->input->post('telephone');
		$register['mobilephone'] = $this->input->post('mobilephone');
		$register['id_diploma'] = $this->input->post('id_diploma');
		$register['id_school'] = $this->input->post('id_school');
		$register['specialized'] = $this->input->post('specialized');
		$register['graduate'] = $this->input->post('graduate');
		$register['type'] = $this->input->post('type');
		$register['id_level_from'] = $this->input->post('id_level_from');
		$register['id_level_to'] = $this->input->post('id_level_to');
		$register['subjects'] = $this->input->post('subjects');
		$register['area_teach'] = $this->input->post('area_teach');
		$register['time_teach'] = $this->input->post('time_teach');
		$register['salary'] = $this->input->post('salary');
		$register['description'] = $this->input->post('description');
		$this->db->where('email', $this->session->userdata('user')->email);		
		if($this->db->update('user', $register)){
			return true ;
		}
		return false ;		 
	}
	function editAvatarRegister(){
		$register = array()    ;
		$register['avatar'] = '';
		$this->db->where('email', $this->session->userdata('user')->email);		
		if($this->db->update('user', $register)){
			return true ;
		}
		return false ;		 
	}
	function changePassword($id){
		$register = array()    ;
		$register['password'] = md5($this->input->post('newpassword')) ;
		$this->db->where('id', intval($id));		
		if($this->db->update('user', $register)){
			return true ;
		}
		return false ;		 
	}
		function deleteRegister($id){
		$this->teacher_online_model->deleteUser($id);
		$this->teacher_pure_model->deleteUser($id);
		$this->teacher_quality_model->deleteUser($id);
		$this->db->where('id', intval($id));	
		$this->db->where('permission',0);		
		if ($this->db->delete('user')){			
			return true ;
		}
		return false ;	 		
	}
	function checkEmail($email){		
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	email '; 		 		
 		$query .= ' FROM user '; 		
 		$query .= ' WHERE ';
 		$query .= ' 	email = ? ';
 		$result = $this->db->query($query, array($email)); 		
 		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return true;
		}
		return false;
 	}
 	function checkPassword($password){		
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	email '; 		 		
 		$query .= ' FROM user '; 		
 		$query .= ' WHERE ';
 		$query .= ' 	email = ? AND password = ? ';
 		$result = $this->db->query($query, array($this->session->userdata('user')->email,$password)); 		
 		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return true;
		}
		return false;
 	}
 	function login(){	
		$email = $this->input->post('email') ; 
		$password = md5($this->input->post('password')) ; 
		$query = '';
 		$query .= ' SELECT * '; 		 
 		$query .= ' FROM user';
 		$query .= ' WHERE ';
 		$query .= ' 	email = ? ';		
 		$query .= ' 	AND password = ? ';
 		$result = $this->db->query($query, array($email, $password));
 		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0] ;
		}
		return null;
 	}	
 	function reLogin($id){	
		$query = '';
 		$query .= ' SELECT * '; 		 
 		$query .= ' FROM user';
 		$query .= ' WHERE ';
 		$query .= ' 	id = ? ';		
 		$result = $this->db->query($query, array($id));
 		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0] ;
		}
		return null;
 	}	
	function loginAdmin(){	
		$email = $this->input->post('email') ; 
		$password = md5($this->input->post('password')) ; 
		$query = '';
 		$query .= ' SELECT * '; 		 
 		$query .= ' FROM user';
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
	function allRegister($page = 0){
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
	function allRegisterAdmin($page = 0){
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
	function getRegister($id){
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
 		$query .= ' WHERE a.permission = 0 AND `lock`=1 AND a.id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
 	function getRegisterLogin($id){
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
 		$query .= ' WHERE a.id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
	function getRegisterAdmin($id){
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
 		$query .= ' WHERE a.id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
	function editActivation($id=0,$activation=0){
		$register = array();
		if($activation==0)
			$activation=1;
		else
			$activation=0;
		$register['activation'] = $activation;
		$this->db->where('id', intval($id));		
		if($this->db->update('user', $register)){
			return true ;
		}
		return false ;			
	}
	function getTotalRows(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM user '; 		
 		$query .= ' WHERE `lock`=1 ';
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
 		$query .= ' FROM user '; 	
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
	function reset_password(){
 		$query = 'SELECT id FROM user WHERE email = ?';
 		
 		$result = $this->db->query($query, array($this->input->post('email')));
 		
 		$rows = $result->result();
 		
 		if($rows){
 			$id = $rows[0]->id;
 			
 			$tmp_password = random_string();
 			
 			$this->db->update('user', array('password'=>md5($tmp_password)), "id=$id");
 			
 			return $tmp_password;
 		}
 		
 		return null;
 	}
}
?>