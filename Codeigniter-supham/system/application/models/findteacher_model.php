<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Findteacher_model extends Model{
	function Findteacher_model(){
		parent::Model();		
	}
	function addFindteacher(){
		$register = array();
		$register['id_provinces'] = $this->input->post('id_provinces');
		$register['id_districts'] = $this->input->post('id_districts');
		$register['address'] = $this->input->post('address');
		$register['telephone'] = $this->input->post('telephone');
		$register['mobilephone'] = $this->input->post('mobilephone');
		$register['email'] = $this->input->post('email');
		$register['contact'] = $this->input->post('contact');
		$register['id_level'] = $this->input->post('id_level');
		$register['subjects'] = $this->input->post('subjects');
		$register['quantity_students'] = $this->input->post('quantity_students');		
		$register['salary'] = $this->input->post('salary');
		$register['type'] = $this->input->post('type');
		$register['gender'] = $this->input->post('gender');
		$register['id_school'] = $this->input->post('id_school');
		$register['description'] = $this->input->post('description');
		$register['registerdate'] = date('Y-m-d H:i:s');
		$register['status'] = 0;
		$register['lock'] = 0;
		if($this->db->insert('find_teacher', $register)){
			return true;
		}
		return false ;
	}
	function editFindteacher($id){
		$register = array()    ;
		$register['id_provinces'] = $this->input->post('id_provinces');
		$register['id_districts'] = $this->input->post('id_districts');
		$register['address'] = $this->input->post('address');
		$register['telephone'] = $this->input->post('telephone');
		$register['mobilephone'] = $this->input->post('mobilephone');
		$register['email'] = $this->input->post('email');
		$register['contact'] = $this->input->post('contact');
		$register['id_level'] = $this->input->post('id_level');
		$register['subjects'] = $this->input->post('subjects');
		$register['quantity_students'] = $this->input->post('quantity_students');		
		$register['salary'] = $this->input->post('salary');
		$register['type'] = $this->input->post('type');
		$register['gender'] = $this->input->post('gender');
		$register['id_school'] = $this->input->post('id_school');
		$register['description'] = $this->input->post('description');
		$this->db->where('id', intval($id));		
		if($this->db->update('find_teacher', $register)){
			return true ;
		}
		return false ;		 
	}
	
	function deleteFindteacher($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('find_teacher')){			
			return true ;
		}
		return false ;	 
	}	
	function allFindteacher($page = 0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	a.id, ';
 		$query .= ' 	a.id_provinces,a.id_districts, ';
 		$query .= ' 	c.name AS provincesName,d.name AS districtsName, ';
 		$query .= ' 	a.address,a.telephone,a.mobilephone, '; 
 		$query .= ' 	a.email,a.contact, '; 
 		$query .= ' 	a.id_level,a.subjects,a.quantity_students, '; 
 		$query .= ' 	a.salary,a.type,a.gender, '; 
 		$query .= ' 	a.id_school,a.description, '; 
 		$query .= ' 	a.registerdate,a.status,a.lock, '; 
 		$query .= ' 	b.name AS levelName ';
 		$query .= ' FROM find_teacher a LEFT OUTER JOIN level b ON b.id = a.id_level ';
 		$query .= '                     LEFT OUTER JOIN provinces c ON c.id = a.id_provinces ';
 		$query .= '                     LEFT OUTER JOIN districts d ON d.id = a.id_districts ';
 		$query .= ' WHERE a.`lock`=1 ';
 		$query .= ' ORDER BY a.registerdate DESC';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function searchAllFindteacher($page = 0){
		$id_provinces = $this->input->post('id_provinces');
		$id_districts = $this->input->post('id_districts');
		$id_level_to = $this->input->post('id_level_to');
		$id_level_from = $this->input->post('id_level_from');
				
		$where = '';
		$where = $where.' AND a.id_provinces = '.$id_provinces;
		if($id_districts!=0)
			$where = $where.' AND a.id_districts = '.$id_districts;
		if($id_level_to!=0 && $id_level_from!=0){
			if($id_level_from>$id_level_to){
				$tmp = $id_level_to;
				$id_level_to = $id_level_from;
				$id_level_from = $tmp;
			}
			$where = $where.' AND a.id_level BETWEEN '.$id_level_from.' AND '.$id_level_to.'  ';
		}
		
		if($id_level_to==0 && $id_level_from!=0)
			$where = $where.' AND a.id_level = '.$id_level_to;
		if($id_level_to!=0 && $id_level_from==0)
			$where = $where.' AND a.id_level = '.$id_level_from;
			
		$where = $where.' ';
		
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	a.id, ';
 		$query .= ' 	a.id_provinces,a.id_districts, ';
 		$query .= ' 	c.name AS provincesName,d.name AS districtsName, ';
 		$query .= ' 	a.address,a.telephone,a.mobilephone, '; 
 		$query .= ' 	a.email,a.contact, '; 
 		$query .= ' 	a.id_level,a.subjects,a.quantity_students, '; 
 		$query .= ' 	a.salary,a.type,a.gender, '; 
 		$query .= ' 	a.id_school,a.description, '; 
 		$query .= ' 	a.registerdate,a.status,a.lock, '; 
 		$query .= ' 	b.name AS levelName ';
 		$query .= ' FROM find_teacher a LEFT OUTER JOIN level b ON b.id = a.id_level ';
 		$query .= '                     LEFT OUTER JOIN provinces c ON c.id = a.id_provinces ';
 		$query .= '                     LEFT OUTER JOIN districts d ON d.id = a.id_districts ';
 		$query .= ' WHERE a.`lock`=1 '.$where;
 		$query .= ' ORDER BY a.registerdate DESC';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function searchAllIndexFindteacher($page = 0,$id_provinces=0,$id_districts=0,$id_level_to=0,$id_level_from=0){
				
		$where = '';
		$where = $where.' AND a.id_provinces = '.$id_provinces;
		if($id_districts!=0)
			$where = $where.' AND a.id_districts = '.$id_districts;
		if($id_level_to!=0 && $id_level_from!=0){
			if($id_level_from>$id_level_to){
				$tmp = $id_level_to;
				$id_level_to = $id_level_from;
				$id_level_from = $tmp;
			}
			$where = $where.' AND a.id_level BETWEEN '.$id_level_from.' AND '.$id_level_to.'  ';
		}
		
		if($id_level_to==0 && $id_level_from!=0)
			$where = $where.' AND a.id_level = '.$id_level_to;
		if($id_level_to!=0 && $id_level_from==0)
			$where = $where.' AND a.id_level = '.$id_level_from;
			
		$where = $where.' ';
		
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	a.id, ';
 		$query .= ' 	a.id_provinces,a.id_districts, ';
 		$query .= ' 	c.name AS provincesName,d.name AS districtsName, ';
 		$query .= ' 	a.address,a.telephone,a.mobilephone, '; 
 		$query .= ' 	a.email,a.contact, '; 
 		$query .= ' 	a.id_level,a.subjects,a.quantity_students, '; 
 		$query .= ' 	a.salary,a.type,a.gender, '; 
 		$query .= ' 	a.id_school,a.description, '; 
 		$query .= ' 	a.registerdate,a.status,a.lock, '; 
 		$query .= ' 	b.name AS levelName ';
 		$query .= ' FROM find_teacher a LEFT OUTER JOIN level b ON b.id = a.id_level ';
 		$query .= '                     LEFT OUTER JOIN provinces c ON c.id = a.id_provinces ';
 		$query .= '                     LEFT OUTER JOIN districts d ON d.id = a.id_districts ';
 		$query .= ' WHERE a.`lock`=1 '.$where;
 		$query .= ' ORDER BY a.registerdate DESC';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function allFindteacherAdmin($page = 0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	a.id, ';
 		$query .= ' 	a.id_provinces,a.id_districts, ';
 		$query .= ' 	c.name AS provincesName,d.name AS districtsName, ';
 		$query .= ' 	a.address,a.telephone,a.mobilephone, '; 
 		$query .= ' 	a.email,a.contact, '; 
 		$query .= ' 	a.id_level,a.subjects,a.quantity_students, '; 
 		$query .= ' 	a.salary,a.type,a.gender, '; 
 		$query .= ' 	a.id_school,a.description, '; 
 		$query .= ' 	a.registerdate,a.status,a.lock, '; 
 		$query .= ' 	b.name AS levelName ';
 		$query .= ' FROM find_teacher a LEFT OUTER JOIN level b ON b.id = a.id_level ';
 		$query .= '                     LEFT OUTER JOIN provinces c ON c.id = a.id_provinces ';
 		$query .= '                     LEFT OUTER JOIN districts d ON d.id = a.id_districts ';
 		$query .= ' ORDER BY a.registerdate DESC';
 		$query .= '	LIMIT ' . $page .',' . (DEFAULT_LIMIT-15);
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getFindteacher($id){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	a.id, ';
 		$query .= ' 	a.id_provinces,a.id_districts, ';
 		$query .= ' 	c.name AS provincesName,d.name AS districtsName, ';
 		$query .= ' 	a.address,a.telephone,a.mobilephone, '; 
 		$query .= ' 	a.email,a.contact, '; 
 		$query .= ' 	a.id_level,a.subjects,a.quantity_students, '; 
 		$query .= ' 	a.salary,a.type,a.gender, '; 
 		$query .= ' 	a.id_school,a.description, '; 
 		$query .= ' 	a.registerdate,a.status,a.lock, '; 
 		$query .= ' 	b.name AS levelName ';
 		$query .= ' FROM find_teacher a LEFT OUTER JOIN level b ON b.id = a.id_level ';
 		$query .= '                     LEFT OUTER JOIN provinces c ON c.id = a.id_provinces ';
 		$query .= '                     LEFT OUTER JOIN districts d ON d.id = a.id_districts ';
 		$query .= ' WHERE `lock`=1 AND a.id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
	function getFindteacherAdmin($id){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	a.id, ';
 		$query .= ' 	a.id_provinces,a.id_districts, ';
 		$query .= ' 	c.name AS provincesName,d.name AS districtsName, ';
 		$query .= ' 	a.address,a.telephone,a.mobilephone, '; 
 		$query .= ' 	a.email,a.contact, '; 
 		$query .= ' 	a.id_level,a.subjects,a.quantity_students, '; 
 		$query .= ' 	a.salary,a.type,a.gender, '; 
 		$query .= ' 	a.id_school,a.description, '; 
 		$query .= ' 	a.registerdate,a.status,a.lock, '; 
 		$query .= ' 	b.name AS levelName ';
 		$query .= ' FROM find_teacher a LEFT OUTER JOIN level b ON b.id = a.id_level ';
 		$query .= '                     LEFT OUTER JOIN provinces c ON c.id = a.id_provinces ';
 		$query .= '                     LEFT OUTER JOIN districts d ON d.id = a.id_districts ';
 		$query .= ' WHERE a.id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
	function editLock($id=0,$lock=0){
		$register = array();
		if($lock==0)
			$lock=1;
		else
			$lock=0;
		$register['lock'] = $lock;
		$this->db->where('id', intval($id));		
		if($this->db->update('find_teacher', $register)){
			return true ;
		}
		return false ;			
	}
	function editStatus($id=0,$status=0){
		$register = array();
		if($status==0)
			$status=1;
		else
			$status=0;
		$register['status'] = $status;
		$this->db->where('id', intval($id));		
		if($this->db->update('find_teacher', $register)){
			return true ;
		}
		return false ;			
	}
	function getTotalRows(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM find_teacher '; 		
 		$query .= ' WHERE `lock`=1 ';
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function searchAllgetTotalRows(){
 		$id_provinces = $this->input->post('id_provinces');
		$id_districts = $this->input->post('id_districts');
		$id_level_to = $this->input->post('id_level_to');
		$id_level_from = $this->input->post('id_level_from');
				
		$where = '';
		$where = $where.' AND id_provinces = '.$id_provinces;
		if($id_districts!=0)
			$where = $where.' AND id_districts = '.$id_districts;
		if($id_level_to!=0 && $id_level_from!=0){
			if($id_level_from>$id_level_to){
				$tmp = $id_level_to;
				$id_level_to = $id_level_from;
				$id_level_from = $tmp;
			}
			$where = $where.' AND id_level BETWEEN '.$id_level_from.' AND '.$id_level_to.'  ';
		}
		
		if($id_level_to==0 && $id_level_from!=0)
			$where = $where.' AND id_level = '.$id_level_to;
		if($id_level_to!=0 && $id_level_from==0)
			$where = $where.' AND id_level = '.$id_level_from;
			
		$where = $where.' ';
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM find_teacher '; 		
 		$query .= ' WHERE `lock`=1 '.$where;
 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function searchAllIndexgetTotalRows($id_provinces=0,$id_districts=0,$id_level_to=0,$id_level_from=0){
 				
		$where = '';
		$where = $where.' AND id_provinces = '.$id_provinces;
		if($id_districts!=0)
			$where = $where.' AND id_districts = '.$id_districts;
		if($id_level_to!=0 && $id_level_from!=0){
			if($id_level_from>$id_level_to){
				$tmp = $id_level_to;
				$id_level_to = $id_level_from;
				$id_level_from = $tmp;
			}
			$where = $where.' AND id_level BETWEEN '.$id_level_from.' AND '.$id_level_to.'  ';
		}
		
		if($id_level_to==0 && $id_level_from!=0)
			$where = $where.' AND id_level = '.$id_level_to;
		if($id_level_to!=0 && $id_level_from==0)
			$where = $where.' AND id_level = '.$id_level_from;
			
		$where = $where.' ';
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM find_teacher '; 		
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
 		$query .= ' FROM find_teacher '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
}
?>