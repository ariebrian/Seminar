<?php 

/**
* 
*/
class User_Model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function reg_user($data)
	{
		$this->db->insert('user',$data);
	}

	public function login_user($data)
	{
		$cond = "uname = "."'" . $data['uname'] . "' AND " . "pass = " . "'" . $data['pass'] . "''";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($cond);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		}else{
			return false;
		}
	}
}

 ?>