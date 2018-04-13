<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empsearch extends CI_Controller {

	function  __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
  }

	public function index()
	{
    $this->db->select('*');
    $this->db->from('meta');
    $data['meta'] = $this->db->get()->result_array();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('pages/search/showemp.php',$data);
	}
}
