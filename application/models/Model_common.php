<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_common extends CI_Model {

	public function databysql($sql){
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	
	public function countrows($sql){
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->num_rows();
		}else{
			return false;
		}
	}

	
	public function insertdata($tablename,$data){
		$query = $this->db->insert($tablename,$data);
		return $this->db->insert_id();
	}

	
	public function updatedata($tablename,$data, $column, $id){
		$this->db->where($column,$id);
		$query = $this->db->update($tablename,$data);
		return $this->db->affected_rows();
	}

	public function deletedata($tablename,$column, $id){
		$this->db->where($column,$id);
		$query = $this->db->delete($tablename);
		return $this->db->affected_rows();
	}
	
	
	public function mailsend($fromemail, $fromname, $to, $subject, $message){
		$this->load->library('email');
		$this->email->set_mailtype("html");
		$this->email->from($fromemail, $fromname);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
	}
	
	
	
	
	
	
	
	function convertToBTCFromSatoshi($value) {
		$BTC = $value / 100000000 ;
		return $BTC;
	}
	
	function formatBTC($value) {
		$value = sprintf('%.8f', $value);
		$value = rtrim($value, '0') . ' BTC';
		return $value;
	}
	
	

		
}//end of class

