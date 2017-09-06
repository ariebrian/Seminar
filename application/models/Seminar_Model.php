<?php 

/**
* 
*/
class Seminar_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function seminar_list()
	{
		$this->db->select('*');
		$this->db->from('list_seminar');
		$this->db->limit();
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function get_seminar($data)
	{
		$cond = "sem_name =" . "'" . $data['sem_name']."'";
		$this->db->select('*');
		$this->db->from('list_seminar');
		$this->db->where($cond);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}
	}
}

 ?>