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
  <button type="button" class="btn btn-primary"><a href="<?php echo base_url();?>index.php/DoctorAddreport1">Add data Report Type 1</a></button>
  <button type="button" class="btn btn-primary"><a href="<?php echo base_url();?>index.php/DoctorShowreport1">View/Edit data Report Type 1</a></button>
  <button type="button" class="btn btn-success"><a href="<?php echo base_url();?>index.php/DoctorMergereport1">Merge Records by Time Period</a></button>
  <button type="button" class="btn btn-primary"><a href="<?php echo base_url();?>index.php/DoctorGeneratereport1">Generate Report Type 1</a></button>
  <br>
  <br>

</div>
</body>
</html>
