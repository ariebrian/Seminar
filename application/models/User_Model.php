<?php 

/**
* 
*/
class User_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function create_user($uname,$pass,$email)
	{
		$data = array(
			'uname' => $username,
			'pass' => $this->hash_password($pass),
			'email' => $email,
		);

		return $this->db->insert('user',$data);
	}

	public function resolve_login_user($uname,$pass)
	{
		$this->db->select('pass');
		$this->db->from('user');
		$this->db->where('uname',$uname);
		$hash = $this->db->get()->row('password');

		return $this->verify_password_hash($pass,$hash);
		
	}

	public function get_uid_from_uname($uname)
	{
		$this->db->select('id_user');
		$this->db->from('user');
		$this->db->where('uname',$uname);
		return $this->db->get()->row('id_user');
	}

	public function get_user($id_user)
	{
		$this->db->from('user');
		$this->db->where('id_user',$id_user);
		return $this->db->get()->row();
	}

	public function hash_password($pass)
	{
		return password_hash($pass, PASSWORD_BCRYPT);
	}

	public function verify_password_hash($pass,$hash)
	{
		return password_verify($pass,$hash);
	}
}

 ?>