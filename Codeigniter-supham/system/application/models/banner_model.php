<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class banner_model extends Model{
	function banner_model(){
		parent::Model();		
	}
	function addBanner($image01,$image02){
		$banner = array();
		$banner['visible'] = $this->input->post('display');		
		if($banner['visible'] == 'on')	
			$banner['visible'] = 1;
		else 
			$banner['visible']=0;
		$banner['image01'] = $image01;	
		$banner['image02'] = $image02;	
		if($this->db->insert('banner', $banner)){
			return true;
		}
		return false ;
	}
	function deleteImageBanner($id,$image,$check){
		$banner = array();					
		if($check == 'true')	
			$banner['visible'] = 1;
		else 
			$banner['visible'] = 0;
			
		if($image=='image01')
			$banner['image01'] ='';
		if($image=='image02')
			$banner['image02'] ='';
			
		$this->db->where('id', intval($id));		
		if($this->db->update('banner', $banner)){
			return true ;
		}
		return false ;	 
	}
	function editbanner($id,$image01,$image02){
		$banner = array();		
		$banner['visible'] = $this->input->post('display');	
		if($banner['visible'] == 'on')	
			$banner['visible'] =1;
		else 
			$banner['visible']=0;					
		$banner['image01'] = $image01;	
		$banner['image02'] = $image02;
		$this->db->where('id', intval($id));		
		if($this->db->update('banner', $banner)){
			return true ;
		}
		return false ;		 
	}	
	function getTotalRows(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	count(id) AS TotalRows '; 		
 		$query .= ' FROM banner '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->TotalRows ;
		}
		return 0;
 	}	
	function getIDBanner(){
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id '; 		
 		$query .= ' FROM banner '; 		 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			return $rows[0]->id ;
		}
		return 0;
 	}
 	function getBanner($id){
 		$query = '';
 		$query .= ' SELECT *'; 		
 		$query .= ' FROM banner ';
 		$query .= ' WHERE id = '.intval($id);  			
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){			
			return $rows[0] ;
		}				
		return null;
 	}
}
?>