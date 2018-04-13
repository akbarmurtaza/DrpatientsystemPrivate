<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Internattendance extends CI_Controller {

	function  __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
  }

	public function index()
	{
    $this->load->model("functions/InternDb");
    $this->db->select('internee.f_name as fname, internee.l_name as lname,internee.role as role,internee.id as id,internee.email as email,internee.phone as phone,internee.address as address,internee.date_start as sdate,internee.date_end as edate,internee.salary as salary');
    $this->db->from('internee');
    $this->db->order_by('internee.id');
    $data['interneeattendance'] = $this->db->get()->result_array();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('pages/Attendance/interneeattendanceview.php',$data);
	}
}
