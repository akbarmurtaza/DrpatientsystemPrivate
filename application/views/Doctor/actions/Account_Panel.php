<?php
$this->load->view('header/docheader.php');
$this->load->view('header/docVerticalnav.php');
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
  <button type="button" class="btn btn-danger"><a href="<?php echo base_url();?>index.php/DoctorAddpatient">Add Patient</a></button>
  <button type="button" class="btn btn-danger"><a href="<?php echo base_url();?>index.php/DoctorCrudpatient">View Patient</a></button>
  <br>
  <br>
  <button type="button" class="btn btn-success"><a href="<?php echo base_url();?>index.php/DoctorPatientwaiting">Patient Waiting List Add Data</a></button>
  <button type="button" class="btn btn-success"><a href="<?php echo base_url();?>index.php/DoctorPatientwaitingindex">Patient Waiting List Index</a></button>
</div>
</body>
</html>
