<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_home extends CI_Model {

// Signup
	public function signup($data){
		$this->db->insert("member",$data);
		return $this->db->insert_id();
	}
	
// id by Username	
	public function useridbyuname($username){
		$query = $this->db->query("SELECT `id` FROM `member` WHERE `username`='$username'");
		
		if($query->num_rows()){
			foreach($query->result() as $row){
				return $row->id;
			}
		}
	}
	

		
}//end of class

