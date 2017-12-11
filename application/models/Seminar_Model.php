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
	public function insert_sem($data)
	{
		$this->db->insert('list_seminar',$data);
	}

	public function seminar_list()
	{
		$this->db->select('*');
		$this->db->from('list_seminar');
		$this->db->limit('8');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_seminar($id)
	{
		//$cond = "id_sem =" . "'" . $id['id_sem']."'";
		$this->db->select('*');
		$this->db->from('list_seminar');
		$this->db->where('id_sem',$id);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function sem_id_user($id)
	{
		$this->db->select('*');
		$this->db->from('list_seminar');
		$this->db->where('id_user',$id);
		$query=$this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function add_jadwal($data)
	{
		$this->db->insert('jadwal',$data);
	}

	public function get_user_jadwal($id)				
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('list_seminar', 'jadwal.id_sem = list_seminar.id_sem');
		$this->db->where('jadwal.id_user',$id);
		$query=$this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return false;
		}	
	}
}

?>