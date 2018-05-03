<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Advertise_model extends Model{
	function Advertise_model(){
		parent::Model();		
	}
	function addAdvertise($image){
		$advertise = array();		
		$advertise['visible'] = $this->input->post('display');		
		if($advertise['visible'] == 'on')	
			$advertise['visible'] = 1;
		else 
			$advertise['visible']=0;		
		$advertise['url'] = $this->input->post('url');				
		$advertise['image'] = $image;			
		$advertise['createdate'] = date('Y-m-d H:i:s');			
		if($this->db->insert('advertise', $advertise)){
			return true;
		}
		return false ;
	}
	function editAdvertise($id,$image){
		$advertise = array();
		$advertise['visible'] = $this->input->post('display');		
		if($advertise['visible'] == 'on')	
			$advertise['visible'] = 1;
		else 
			$advertise['visible']=0;
		$advertise['url'] = $this->input->post('url');				
		$advertise['image'] = $image;		
		$advertise['createdate'] = date('Y-m-d H:i:s');			
		$this->db->where('id', intval($id));		
		if($this->db->update('advertise', $advertise)){
			return true ;
		}
		return false ;		 
	}
	function deleteAdvertise($id){
		$this->db->where('id', intval($id));		
		if ($this->db->delete('advertise')){			
			return true ;
		}
		return false ;	 
	}
	function allAdvertise($page = 0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id,visible, '; 		
 		$query .= ' 	url,image,createdate '; 		
 		$query .= ' FROM advertise ';
 		$query .= ' ORDER BY id ';
 		$query .= '	LIMIT ' . $page .',' . DEFAULT_LIMIT;
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows ;
		}		
		return null;
	}	
	function getAllAdvertise($page = 0){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id,visible, '; 		
 		$query .= ' 	url,image,createdate '; 		
 		$query .= ' FROM advertise '; 				
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
 		$query .= ' FROM advertise '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}
 	function getAdvertise($id){
 		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id,visible, '; 		
 		$query .= ' 	url,image,createdate '; 		
 		$query .= ' FROM advertise ';
 		$query .= ' WHERE id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	} 	
 	function editVisible($id=0,$visible=0){
		$advertise = array();
		if($visible==0)
			$visible=1;
		else
			$visible=0;
		$advertise['visible'] = $visible;
		$this->db->where('id', intval($id));		
		if($this->db->update('advertise', $advertise)){
			return true ;
		}
		return false ;			
	}
	function deleteImageAdvertise($id){
		$advertise = array();
		$advertise['image'] = '';
		$this->db->where('id', intval($id));		
		if($this->db->update('advertise', $advertise)){
			return true ;
		}
		return false ;			
	}
	
}
?>