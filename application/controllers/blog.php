<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
	}

	public function index()
	{
		$this->load->view('blogpage');
	}
}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */