<?php
$this->load->view('header/header.php');
$this->load->view('header/Verticalnav.php');
$this->load->helper('url');


$servername = "localhost";
$username = "snk42";
$password = "Healing4all!";
$dbname = "drpatient";


$conn = new mysqli($servername, $username, $password, $dbname);
$result1 = mysqli_query($conn,"SELECT * FROM doctor");

if(isset($_POST['input']))
  {
    $email = $_POST['doc'];
    $subject = $_POST['subject'];
    $id = $_POST['patient'];
    $message = $_POST['message'];
    $this->session->set_tempdata('email', $email, 300);
    $this->session->set_tempdata('subject', $subject, 300);
    $this->session->set_tempdata('id', $id, 300);
    $this->session->set_tempdata('message', $message, 300);
      header('location:Sendmail');
}
 ?>
 
 <style>
 select.form-control option
{
    background-color: #67fca5;
}

</style>

<h3 align="center">Notification Generator</h3>
<br>
<br>
<div class="container" style="left:80px;position:relative;">
<div class="col-xs-8" align="left">
  <div class="form-group" align="left">
<form class="form-group" action="" method="POST">
  Send To:<br>
  <select class="form-control" name="doc" id="doc_id"  tabindex="-1" aria-hidden="true" required/>
                      <option class="option1" value="" selected disabled>----Choose Receipent----</option>
                                          <?php while($record2 = mysqli_fetch_array($result1)):?>
                      <option value="<?php echo $record2['email'];?>">  <?php echo "Name : ".$record2['f_name']." ".$record2['l_name']." (".$record2['email'].")";?></option>
                      <?php endwhile;?>
                   </select>
                   <?php
                   $ptqer = "SELECT patient.id,patient.f_name as fname,patient.last_name as lname,patient.m_name as mname, patient.sex as sex, patient.age as age, report1.active as active,report1.id as reportid, report1.dose as dose, report1.tel_health as tel, report1.pill as pill, report1.PE as pe, report1.kasper as kasper,report1.lastuds as uds,report1.last_visit as lv,report1.tp_start as tpstart,report1.tp_reassessment as reass,report1.pt_medmanagement as med,report1.pt_dissum as diss,report1.pt_relapse as relapse,report1.pt_relapsehist as relapsehist,report1.pt_auth as auth,report1.pt_auth_start_date as sdate,report1.pt_auth_end_date as edate,report1.cm_summary as cm, report1.patient_id,report1.timeline_month as month,report1.timeline_year as year FROM patient INNER JOIN report1 ON patient.id = report1.patient_id WHERE report1.show_ = 'YES' ";
                   $inv = mysqli_query($conn,$ptqer);
                   ?>
  <br>
  Subject:<br>
  <input class="form-control input-sm" type="text" name="subject" placeholder="Enter Subject" required />
  <br>
  Patient (Report Data):<br>
  <select class="form-control" name="patient" id="patient_id"  tabindex="-1" aria-hidden="true"/>
                      <option value="" selected disabled>----Choose Patient----</option>
                      <option value="" >EMPTY</option>
                                          <?php foreach($inv as $pt){ ?>
                      <option value="<?php echo $pt['reportid'];?>">  <?php echo "Name : ".$pt['fname']." ".$pt['lname']." (Prior Auth: ".$pt['auth'].")  (Med Management: ".$pt['med'].")  ".$pt['month']." ===>  ".$pt['year'];?></option>
                      <?php };?>
                   </select>
  <br>
  <br>
  Email Body / Message:<br>
  <input class="form-control input-sm" type="text" name="message" placeholder="Enter Text" />
  <br>
  <input type="submit" class="btn btn-primary" name="input" value="Generate Notification" >
  </form>
</div>
<br>
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
