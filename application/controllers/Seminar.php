<?php 

/**
* 
*/
class Seminar extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->model('Seminar_Model');
		$this->load->model('User_Model');
	}

	public function insert()
	{
		$path = './img';
		chmod($path, 0777);
		$val_add = array(
					 array(
					 	'field' => 'nama' , 
					 	'label' => 'Nama Seminar',
					 	'rules' => 'required',
					 	'errors' => array('required'=>'%s harus diisi'),
					 ),
					 array(
					 	'field' => 'tanggal' , 
					 	'label' => 'Tanggal Seminar',
					 	'rules' => 'required',
					 	'errors' => array('required'=>'%s harus diisi'),
					 ),
					 array(
					 	'field' => 'CP' , 
					 	'label' => 'Contact Person',
					 	'rules' => 'required',
					 	'errors' => array('required'=>'%s harus diisi'),
					 ),
				);
		$config['upload_path']			=$path;
		$config['allowed_types']		='jpg|png';
		$config['max_size']             = 2048;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->form_validation->set_rules($val_add);
        $this->load->library('upload',$config);

        if ($this->form_validation->run() == FALSE) {
	        $this->load->view('header');
	        $this->load->view('create_event');
	        $this->load->view('footer');
	    }else{
	    	$this->upload->do_upload('images');
	    	$data_upload = $this->upload->data();
	    	// echo "<pre>";
	    	// print_r($data_upload);
	    	// echo "</pre>";
	    	// die();
	    	$image_path = '/img/'.$data_upload['file_name'];
	    	//var_dump($image_path);
	    	//die();
	    	$date = date_create($this->input->post('tanggal'));
	    	$date_formatted = date_format($date,"Y/m/d");
	    	//var_dump($date_formatted);
	    	//die();
	        $data = array(
	        	'id_user' => $this->session->userdata('id'),
                'sem_name' => $this->input->post('nama') ,
                'sem_date' => $date_formatted,
                'sem_desc' =>$this->input->post('desc'),           
                'link_reg' => $this->input->post('link'),
                'sem_cp' => $this->input->post('CP'),
                'sem_img' => $image_path,
                ); 
	        var_dump($data);
	       

	        //$img = array('upload_data' => $this->upload->data(), );
	        $this->Seminar_Model->insert_sem($data);

	        redirect('');
	    }
	}

	public function index()
	{
		$data['seminar'] = $this->Seminar_Model->seminar_list();
		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";
		// die();
	}

	public function get_seminar($id)
	{
		if($id === NULL){
			redirect('');
		}else{
			$sem = array(
					'details' => $this->Seminar_Model->get_seminar($id) , 
					);
			//echo "<pre>";
			//var_dump($sem);
			//die();
			//echo "</pre>";
			$this->load->view('header');
			$this->load->view('desc_sem',$sem);
			$this->load->view('footer');
		}
	}

	public function user_sem($id)
	{
		$data = array(
				'sem' => $this->Seminar_Model->sem_id_user($id) , 
				'user' => $this->User_Model->user_id($id),
			);
		// echo "<pre>";
		// var_dump($data);
		// die();
		// echo "</pre>";
		$this->load->view('header');
		$this->load->view('profile',$data);
		$this->load->view('footer');
	}

	public function add_jadwal()
	{
		$id = $this->input->post('id');
		// echo "<pre>";
		//var_dump($id);
		// die();
		// echo "</pre>";
		$detail = $this->Seminar_Model->get_seminar($id);
		// echo "<pre>";
		 //var_dump($detail);
		// die();
		// echo "</pre>";
		$data = array(
				'id_user' => $this->session->userdata('id') , 
				'id_sem' => $detail[0]->id_sem,
				'sem_name' => $detail[0]->sem_name,
				'sem_date' => $detail[0]->sem_date,
				);
		// echo "<pre>";
		// var_dump($data);
		// die();
		// echo "</pre>";
		$this->Seminar_Model->add_jadwal($data);
		$uid = $this->session->userdata('id');
		redirect('user/$uid')
	}

	public function user_jadwal($uid)
	{
		$data = array(
				'sem' => $this->Seminar_Model->get_user_jadwal($uid) , 
				'user' => $this->User_Model->user_id($uid),
			);
		// echo "<pre>";
		// var_dump($data);
		// die();
		// echo "</pre>";
		$this->load->view('header');
		$this->load->view('profile',$data);
		$this->load->view('footer');	
	}
}

 ?>