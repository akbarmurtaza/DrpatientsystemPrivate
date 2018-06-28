<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Send_mail extends CI_Controller {

	public function index()
	{
			if(isset($this->session->userdata['logged_in'])){
			
	$config['protocol'] = 'smtp';
	$config['smtp_host'] = 'ssl://p3plcpnl0796.prod.phx3.secureserver.net';
	$config['smtp_port'] = 465;
	$config['smtp_user'] = 'admin@drpatient111.info';
	$config['smtp_pass'] = 'drpatient112';
	$config['charset'] ='utf-8';
	$config['wordwrap'] = TRUE;
	$config['mailtype'] = 'html';
	
       $this->load->library('email');
       $this->email->set_mailtype("html");

$this->email->from('noreply@drpatient111', 'Admin@drpatient111');
$this->email->to($this->session->tempdata('email'));
$this->email->cc($this->session->tempdata('subject'));

 $body = $this->load->view('Admin/actions/mail_template.php','',TRUE);

$this->email->subject($this->session->tempdata('subject'));
$this->email->message($body);

$this->email->send();

echo $this->email->print_debugger();
		}

			else{
				header("location: Admin_Login");
			}
		}
	}
?>
