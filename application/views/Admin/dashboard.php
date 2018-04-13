<?php
$this->load->view('header/header.php');
$this->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dr Patient Admin System</title>

	<style type="text/css">

body {
  background-color: #EAECEE;
  margin: 40px;
  font: 13px/20px normal Helvetica, Arial, sans-serif;
  color: #4F5155;
}
</style>
</head>

<body>
<div class="container" >
  <button type="button" class="btn btn-success"><a href="<?php echo base_url();?>index.php/Admin/Intern" class="colored">Internees</a></button><br>
  <br>
  <button type="button" class="btn btn-success"><a href="<?php echo base_url();?>index.php/Admin/Member" class="colored">Employees</a></button><br>
  <br>
  <button type="button" class="btn btn-success"><a href="<?php echo base_url();?>index.php/Attendance/Internattendance" class="colored">Internee Attendance</a></button><br>
  <br>
  <button type="button" class="btn btn-success"><a href="<?php echo base_url();?>index.php/Servicetableview" class="colored">Employee Attendance</a></button><br>
  <br>
  <button type="button" class="btn btn-success"><a href="<?php echo base_url();?>index.php/Admin/Projects" class="colored">Projects</a></button><br>
  <br>
  <button type="button" class="btn btn-success"><a href="<?php echo base_url();?>index.php/Admin/Team" class="colored">Teams</a></button><br>
  <br>
</div>
</body>

</html>

<?php
echo $this->session->userdata('username');
echo $this->session->userdata('password');
echo $this->session->userdata('logged_in');

 ?>
