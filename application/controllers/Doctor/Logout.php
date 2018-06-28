<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	function  __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
			$this->load->library('session');
  }

	public function index()
	{
		$this->session->unset_userdata('logged_in_doc');
		$this->session->sess_destroy();
     redirect('index.php/Doctor_Login', 'index');
	}
}
