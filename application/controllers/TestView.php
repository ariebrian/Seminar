<?php 

/**
* 
*/
class TestView extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('carousel');
		$this->load->view('footer');
	}

	public function profile()
	{
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
	}

	public function desk_sem()
	{
		$this->load->view('header');
		$this->load->view('desc_sem');
		$this->load->view('footer');
	}

	public function create_event()
	{
		$this->load->view('header');
		$this->load->view('create_event');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('log');
		$this->load->view('footer');
	}

	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}
}

 ?>