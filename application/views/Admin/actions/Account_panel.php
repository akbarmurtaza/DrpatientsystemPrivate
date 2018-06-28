<?php
$this->load->view('header/header.php');
$this->load->view('header/Verticalnav.php');
$this->load->helper('url');
?>
<html>
<style>
a {
  color: #EBEDEF;
  background-color: transparent;
  font-weight: normal;
}
</style>
<body>
<div class="container" >
  <button type="button" class="btn btn-primary"><a href="<?php echo base_url();?>index.php/Admin_adddoctor">Add Doctor Account</a></button>
  <button type="button" class="btn btn-primary"><a href="<?php echo base_url();?>index.php/Cruddoctor">View/Edit Doctor Account</a></button>
  <br>
  <br>
  <button type="button" class="btn btn-danger"><a href="<?php echo base_url();?>index.php/Addpatient">Add Patient</a></button>
  <button type="button" class="btn btn-danger"><a href="<?php echo base_url();?>index.php/Crudpatient">View Patient</a></button>
  <br>
  <br>
  <button type="button" class="btn btn-success"><a href="<?php echo base_url();?>index.php/Patientwaiting">Patient Waiting List Add Data</a></button>
  <button type="button" class="btn btn-success"><a href="<?php echo base_url();?>index.php/Patientwaitingindex">Patient Waiting List Index</a></button>
</div>
</body>
</html>
