<?php 

/**
* 
*/
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('User_Model');
	}

	public function user_login()
	{
		$this->load->view('header');
		$this->load->view('log');
		$this->load->view('footer');
	}

	public function user_reg()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');	
	}

	public function login_proc()
	{
		$val_login = array(
							array(
								'field' => 'username',
								'label' => 'Username',
								'rules' => 'required',
								'errors' => array('
											required' =>'Anda harus mengisi %s')),
							array(
								'field' => 'password',
								'label' => 'Password',
								'rules' => 'required',
								'errors' => array('
											required' =>'Anda harus mengisi %s')),
					);

		$this->form_validation->set_rules($val_login);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('header');
			$this->load->view('log');
			$this->load->view('footer');
		}else{
			$data = array(
				'uname' => $this->input->post('username'),
				'pass' => md5($this->input->post('password')) 
				);
			$result = $this->User_Model->login($data);
			if ($result == TRUE) {
				$uname = $this->input->post('username');
				$result = $this->User_Model->user_info($uname);
				if ($result != false) {
					$session_data = array(
										'uname' => $result[0]->uname , 
										'email' => $result[0]->email,
										);
					$this->session->set_userdata($session_data);
					redirect('TestView/profile');
				}else{
					$data = array('message_display' => 'Nama Pengguna atau Password Salah');
	                
	                $this->session->set_userdata( $data );
	                redirect('login');
				}

			}
		}
	}

	public function register()
	{
		$val_reg = array(
							array(
								'field' => 'username',
								'label' => 'Username',
								'rules' => '
										required|is_unique[user.uname]',
								'errors' => array(
											'required' => 'Anda harus mengisi %s',
											'is_unique' => '%s sudah dipakai'
											),		
							),
							array(
								'field' => 'password',
								'label' => 'Password',
								'rules' => '
										required|min_length[6]',
								'errors' => array(
											'required' => 'Anda harus mengisi %s',
											'min_length' => '%s minimal 6 karakter'
											),		
							),
							array(
								'field' => 'confirm',
								'label' => 'Konfirmasi Password',
								'rules' => '
										required|matches[password]',
								'errors' => array(
											'required' => 'Anda harus mengisi %s',
											'matches' => '%s tidak sesuai password'
											),		
							),
							array(
								'field' => 'name',
								'label' => 'Nama',
								'rules' => '
										required',
								'errors' => array(
											'required' => 'Anda harus mengisi %s'
											),		
							),
							array(
								'field' => 'email',
								'label' => 'Email',
								'rules' => '
										required',
								'errors' => array(
											'required' => 'Anda harus mengisi %s'
											),		
							),
							array(
								'field' => 'phone',
								'label' => 'Phone',
								'rules' => '
										required',
								'errors' => array(
											'required' => 'Anda harus mengisi %s'
											),		
							),
					);
		$this->form_validation->set_rules($val_reg);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('header');
			$this->load->view('register');
			$this->load->view('footer');
		}else{
			$data = array(
						'uname' => $this->input->post('username'), 
						'pass' => md5($this->input->post('password')),
						'name' => $this->input->post('name'),
						'email' => $this->input->post('email'),
						'phone' => $this->input->post('phone'),
					);
			$this->User_Model->create_user($data);
			redirect('login');
		}







	}
}

 ?>