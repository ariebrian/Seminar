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
		$this->load->view('footer');
	}

	public function profile()
	{
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
	}
}

 ?>