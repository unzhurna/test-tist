<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	function index()
	{
		$data['script'] = $this->load->view('login_js', '', TRUE);
		$this->load->view('login', $data);
	}
	
}