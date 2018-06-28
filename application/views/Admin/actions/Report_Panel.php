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
  <button type="button" class="btn btn-primary"><a href="<?php echo base_url();?>index.php/Addreport1">Add data Report Type 1</a></button>
  <button type="button" class="btn btn-primary"><a href="<?php echo base_url();?>index.php/Showreport1">View/Edit data Report Type 1</a></button>
  <button type="button" class="btn btn-success"><a href="<?php echo base_url();?>index.php/Mergereport1">Merge Records by Time Period</a></button>
  <button type="button" class="btn btn-primary"><a href="<?php echo base_url();?>index.php/Generatereport1">Generate Report Type 1</a></button>
  <br>
  <br>
  <button type="button" class="btn btn-warning"><a href="<?php echo base_url();?>index.php/Reportlogs">Report Logs</a></button>
  <br>
  <br>
  
</div>
</body>
</html>
