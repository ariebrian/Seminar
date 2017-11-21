 <?php 

/**
* 
*/
class User_Model extends CI_Model
{
	
	function __construct()
	{
		parent :: __construct();
		$this->load->database();
	}

	public function login($data)
	{
		$condition = "uname =" . "'" . $data['uname'] . "' AND " . "pass =" . "'" . $data['pass'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		}else{
			return false;
		}
	}

	public function user_info($uname)
	{
		$cond = "uname = " . "'" . $uname . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($cond);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function create_user($data)
	{
		$this->db->insert('user',$data);
	}
}

 ?>