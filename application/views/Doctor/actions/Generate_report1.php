<?php
$this->load->view('header/docheader.php');
$this->load->view('header/docVerticalnav.php');
$this->load->helper('url');


$servername = "localhost";
$username = "snk42";
$password = "Healing4all!";
$dbname = "drpatient";


$conn = new mysqli($servername, $username, $password, $dbname);
$result = mysqli_query($conn,"SELECT * FROM doctor'");

if(isset($_POST['input']))
  {
    $name = $_POST['name'];
    $month = $_POST['month'];
    $date = $_POST['date'];
    $dept = $_POST['dept'];
    $this->session->set_tempdata('name', $name, 300);
    $this->session->set_tempdata('month', $month, 300);
    $this->session->set_tempdata('date', $date, 300);
    $this->session->set_tempdata('dept', $dept, 300);
      header('location:DoctorReport1table');
}

if(isset($_POST['input2']))
  {
    $name = $_POST['name2'];
    $month = $_POST['month'];
    $date = $_POST['year'];
    $dept = $_POST['dept2'];
    $this->session->set_tempdata('name', $name, 300);
    $this->session->set_tempdata('month', $month, 300);
    $this->session->set_tempdata('date', $date, 300);
    $this->session->set_tempdata('dept', $dept, 300);
      header('location:DoctorReport1table_timed');
}
 ?>

<h3 align="center">Type 1 Report Generator</h3>
<br>
<br>
<h4 align="center">Generate Report containing all active report Slots</h4>
<br>
<div class="container" style="left:80px;position:relative;">
<div class="col-xs-8" align="left">
  <div class="form-group" align="left">
<form class="form-group" action="" method="POST">
  Performed By:<br>
  <input class="form-control input-sm" type="text" name="name" placeholder="Name" required />
  <br>
  Month:<br>
  <input class="form-control input-sm" type="text" name="month" placeholder="Enter MONTH - YEAR" required />
  <br>
  Start/End Date:<br>
  <input class="form-control input-sm" type="text" name="date" placeholder="Enter Time Period" required />
  <br>
  Department:<br>
  <input class="form-control input-sm" type="text" name="dept" placeholder="Enter Department" required />
  <br>
  <input type="submit" class="btn btn-primary" name="input" value="Generate Report" >
  </form>
</div>
<br>
<h4 align="center">Generate by Time Period</h4>
<br>
<div class="form-group" align="left">
<form class="form-group" action="" method="POST">
Performed By:<br>
<input class="form-control input-sm" type="text" name="name2" placeholder="Name" required />
<br>
Month:<br>
<select class="form-control input-sm" name="month" tabindex="-1" aria-hidden="true" required/>
                     <option value="" selected disabled>----Select Month----</option>
                     <option value="January" >January</option>
                     <option value="February" >February</option>
                     <option value="March" >March</option>
                     <option value="April" >April</option>
                     <option value="May" >May</option>
                     <option value="June" >June</option>
                     <option value="July" >July</option>
                     <option value="August" >August</option>
                     <option value="September" >September</option>
                     <option value="October" >October</option>
                     <option value="November" >November</option>
                     <option value="December" >December</option>
                   </select>
<br>
Year:<br>
<input class="form-control input-sm" type="text" name="year" placeholder="Enter Year" required />
<br>
Department:<br>
<input class="form-control input-sm" type="text" name="dept2" placeholder="Enter Department" required />
<br>
<input type="submit" class="btn btn-info" name="input2" value="Generate Report" >
</form>
</div>
</div>
</div>



<script>
function attendance(clicked_id)
{
  alert(clicked_id);
  document.getElementById("at_id").value = clicked_id;
  alert(document.getElementById("at_id").value);
}

function deleterow(clicked_id)
{
  document.getElementById("attendance").deleteRow(clicked_id);
}
</script>
