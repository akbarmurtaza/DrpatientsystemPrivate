<?php
$this->load->view('header/docheader.php');
$this->load->view('header/docVerticalnav.php');
$this->load->helper('url');
?>


<?php
error_reporting(0);
$servername = "localhost";
$username = "snk42";
$password = "Healing4all!";
$dbname = "drpatient";

    $var = $this->session->tempdata('id');

  $conn = new mysqli($servername, $username, $password, $dbname);

  $doc = mysqli_query($conn,"SELECT * FROM report1 WHERE id = '$var'");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
	$query1 = mysqli_query($conn, "SET NAMES utf8");

  $pid = $_POST['pid'];
  $activ = $_POST['active'];
  $dose = $_POST['dose'];
  $tele = $_POST['tele'];
  $pill = $_POST['pill'];
  $pe = $_POST['pe'];
  $kasper = $_POST['kasper'];
  $uds = $_POST['lastuds'];
  $lv = $_POST['lastvisit'];
  $show = $_POST['show'];
  $tp_sdate = $_POST['tp_sdate'];
  $tp_re = $_POST['tp_re'];
  $med_man = $_POST['med'];
  $dissum = $_POST['pt_dissum'];
  $relapse = $_POST['relapse'];
  $relapse_hist = $_POST['relapse_hist'];
  $prior_aut = $_POST['prior_auth'];
  $prior_auth_sdate = $_POST['pt_auth_sdate'];
  $prior_auth_edate = $_POST['pt_auth_edate'];
  $t_month = $_POST['timeline_month'];
  $t_year = $_POST['timeline_year'];
  $cm = $_POST['cm'];

  if(isset($_POST['input']))
    {
  $sql = "UPDATE report1 SET active = '$activ',dose = '$dose',tel_health = '$tele', pill = '$pill', PE = '$pe',kasper = '$kasper', lastuds = '$uds', last_visit = '$lv', show_ = '$show', tp_start = STR_TO_DATE('$tp_sdate', '%m/%d/%Y'), tp_reassessment = '$tp_re', pt_medmanagement = '$med_man',pt_dissum = '$dissum',pt_relapse = '$relapse',pt_relapsehist = '$relapse_hist',pt_auth = '$prior_aut',pt_auth_start_date = STR_TO_DATE('$prior_auth_sdate', '%m/%d/%Y'),pt_auth_end_date = STR_TO_DATE('$prior_auth_edate', '%m/%d/%Y'), cm_summary = '$cm',timeline_month = '$t_month',timeline_year = '$t_year'  WHERE id = '$var'";
  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:DoctorShowreport1');
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);

}

?>


<H3 align="center"> Edit Report Slot </H3>
<br>
<p align="center"> <font color="red"> You are editing an existing record. Only Change the fields which you want to edit. </font> </p>

<div class="container" style="left:80px;position:relative;">
<div class="col-xs-8" align="left">
  <div class="form-group" align="left">
    <form class="form-group" action="" method="POST">
    Patient:<br>
    <?php
                    while($record = mysqli_fetch_array($doc)):?>
      <input class="form-control input-sm" type="text" name="pid" value="<?php echo $record['patient_id'];?>" readonly/>
                                                  <br>
    Active/CM:<br>
    <input class="form-control input-sm" type="text" name="active" value="<?php echo $record['active'];?>"/>
    Dose:<br>
    <input class="form-control input-sm" type="text" name="dose" value="<?php echo $record['dose'];?>"/>
    Tele Health (1/30) on site:
    <input class="form-control input-sm" type="text" name="tele"  value="<?php echo $record['tel_health'];?>"/>
    Pill Ct (2/yr):<br>
    <input class="form-control input-sm" type="text" name="pill"  value="<?php echo $record['pill'];?>"/>
    PE 1/30d:<br>
    <input class="form-control input-sm" type="text" name="pe" value="<?php echo $record['PE'];?>" />
    Kasper ref #:<br>
    <input class="form-control input-sm" type="text" name="kasper" value="<?php echo $record['kasper'];?>"/>
    Last UDS:<br>
    <input class="form-control input-sm" type="text" name="lastuds" value="<?php echo $record['lastuds'];?>"/>
    Last Counseling visit:<br>
    <input class="form-control input-sm" type="text" name="lastvisit" value="<?php echo $record['last_visit'];?>"/>

    Treatment Plan Start Date:<br>
    <input class="form-control input-sm" type="text" name="tp_sdate" value="<?php echo date('m/d/Y',strtotime($record['tp_start']));?>"/>
  Treatment Plan Reassessment :<br>
  <input class="form-control input-sm" name="tp_re" type="text" value="<?php echo $record['tp_reassessment'];?>" />

  Patient Completed Medical Management (?) :<br>
  <input class="form-control input-sm" name="med" type="text" value="<?php echo $record['pt_medmanagement'];?>" />
   Patient Discharge Summary Complete (?) :<br>
  <input class="form-control input-sm" type="text" name="pt_dissum" value="<?php echo $record['pt_dissum'];?>"/>
  <br>

  Patient Relapse (?) :<br>
  <input class="form-control input-sm" name="relapse" type="text" value="<?php echo $record['pt_relapse'];?>" />

  Patient Relapse History (?) :<br>
  <input class="form-control input-sm" type="text" name="relapse_hist" value="<?php echo $record['pt_relapsehist'];?>"/>
  Prior Authorization :<br>
  <input class="form-control input-sm" name="prior_auth" type="text" value="<?php echo $record['pt_auth'];?>"/>

  Prior Auth Strart Date  :<br>
  <input class="form-control input-sm" type="text" name="pt_auth_sdate" placeholder="" value="<?php echo date('m/d/Y',strtotime($record['pt_auth_start_date']));?>" />
  Prior Auth End Date  :<br>
  <input class="form-control input-sm" type="text" name="pt_auth_edate" placeholder="" value="<?php echo date('m/d/Y',strtotime($record['pt_auth_end_date']));?>" />
  Case Management  :<br>
  <input class="form-control input-sm" type="text" name="cm" value="<?php echo $record['cm_summary'];?>" />
  Timeline :<br>
  <input class="form-control input-sm" type="text" name="timeline_month" value="<?php echo $record['timeline_month'];?>"/>
   <input class="form-control input-sm" type="text" name="timeline_year" value="<?php echo $record['timeline_year'];?>"/>

    <?php endwhile;?>
    Show in Report:<br>
    <select class="form-control input-sm" name="show" tabindex="-1" aria-hidden="true" required/>
                       <option value="" selected disabled>----Select Visibility----</option>
                       <option value="yes" >YES</option>
                       <option value="no" >NO</option>
                     </select>
    <br>
    <input type="submit" class="btn btn-primary" name="input" value="Submit" >
    </form>
</div>
</div>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
