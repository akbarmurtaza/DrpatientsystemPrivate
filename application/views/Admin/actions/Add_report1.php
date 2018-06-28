<?php
$this->load->view('header/header.php');
$this->load->view('header/Verticalnav.php');
$this->load->helper('url');
?>


<?php
error_reporting(0);
$servername = "localhost";
$username = "snk42";
$password = "Healing4all!";
$dbname = "drpatient";

$name = $this->session->userdata('username');
  $conn = new mysqli($servername, $username, $password, $dbname);

  $message = "Data Entry Successful";

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
	$query1 = mysqli_query($conn, "SET NAMES utf8");

  $pid = $_POST['patient'];
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
  $sql = "INSERT INTO report1(patient_id,active,dose,tel_health,pill,PE,kasper,lastuds,last_visit,show_,tp_start,tp_reassessment,pt_medmanagement
,pt_dissum,pt_relapse,pt_relapsehist,pt_auth,pt_auth_start_date,pt_auth_end_date,cm_summary,timeline_month,timeline_year,added_by) VALUES('$pid','$activ','$dose','$tele','$pill','$pe','$kasper','$uds','$lv','$show',STR_TO_DATE('$tp_sdate', '%m/%d/%Y'),'$tp_re','$med_man','$dissum','$relapse','$relapse_hist','$prior_aut',STR_TO_DATE('$prior_auth_sdate', '%m/%d/%Y'),STR_TO_DATE('$prior_auth_edate', '%m/%d/%Y'),'$cm','$t_month','$t_year','$name')";
  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:Addreport1');
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
}

?>


<H3 align="center"> Add New Report Slot </H3>
<br>


<div class="container" style="left:80px;position:relative;">
<div class="col-xs-8" align="left">
  <div class="form-group" align="left">
<form class="form-group" action="" method="POST">
  Patient:<br>
  <?php
                                $inv = mysqli_query($conn, "select * from patient");
                               ?>
                               <select name="patient" id="owner_id"  tabindex="-1" aria-hidden="true" required/>
                                                   <option value="" selected disabled>----Select Patient----</option>
                                                                       <?php while($record2 = mysqli_fetch_array($inv)):?>
                                                   <option value="<?php echo $record2['id'];?>">  <?php echo "ID: ".$record2['id']." ".$record2['f_name']." ".$record2['last_name']." Age: ".$record2['age'];?></option>
                                                   <?php endwhile;?>
                                                </select>
                                                <br>
  Active/CM:<br>
  <input class="form-control input-sm" type="text" name="active" />
  Dose:<br>
  <input class="form-control input-sm" type="text" name="dose" />
  Tele Health (1/30) on site:
  <input class="form-control input-sm" type="text" name="tele"  />
  Pill Ct (2/yr):<br>
  <input class="form-control input-sm" type="text" name="pill"  />
  PE 1/30d:<br>
  <input class="form-control input-sm" type="text" name="pe"  />
  Kasper ref #:<br>
  <input class="form-control input-sm" type="text" name="kasper" />
  Last UDS:<br>
  <input class="form-control input-sm" type="text" name="lastuds" />
  Last Counseling visit:<br>
  <input class="form-control input-sm" type="text" name="lastvisit" />
  Treatment Plan Start Date :<br>
  <input class="form-control input-sm" type="text" name="tp_sdate" placeholder=" mm/dd/yyyy" />
  Treatment Plan Reassessment :<br>
  <select class="form-control input-sm" name="tp_re" tabindex="-1" aria-hidden="true" required/>
                     <option value="" selected disabled>----Select----</option>
                     <option value="1 Month (NO)" >1 Month (NO)</option>
                     <option value="3 Month (NO)" >3 Month (NO)</option>
                     <option value="6 Month (NO)" >6 Month (NO)</option>
                     <option value="9 Month (NO)" >9 Month (NO)</option>
                     <option value="1 Year (NO)" >1 Year (NO)</option>
                     
                     <option value="1 Month (YES)" >1 Month (YES)</option>
                     <option value="3 Month (YES)" >3 Month (YES)</option>
                     <option value="6 Month (YES)" >6 Month (YES)</option>
                     <option value="9 Month (YES)" >9 Month (YES)</option>
                     <option value="1 Year (YES)" >1 Year (YES)</option>
                   </select>
                   <br>
  Patient Completed Medical Management (?) :<br>
  <select class="form-control input-sm" name="med" tabindex="-1" aria-hidden="true" required/>
                     <option value="" selected disabled>----Select----</option>
                     <option value="yes" >YES</option>
                     <option value="no" >NO</option>
                     <option value="In Treatment" >IN TREATMENT</option>
                   </select>
   Patient Discharge Summary Complete (?) :<br>
  <input class="form-control input-sm" type="text" name="pt_dissum" placeholder="Enter Yes if Patient has completed Medical Management"/>
  <br>
  
  Patient Relapse (?) :<br>
  <select class="form-control input-sm" name="relapse" tabindex="-1" aria-hidden="true" required/>
                     <option value="" selected disabled>----Select----</option>
                     <option value="yes" >YES</option>
                     <option value="no" >NO</option>
                   </select>
  Patient Relapse History (?) :<br>
  <input class="form-control input-sm" type="text" name="relapse_hist" placeholder="Enter Summary of Relapse History (Date, Action Taken)"/>
  Prior Authorization :<br>
  <select class="form-control input-sm" name="prior_auth" tabindex="-1" aria-hidden="true" required/>
                     <option value="" selected disabled>----Select----</option>
                     <option value="yes" >YES</option>
                     <option value="no" >NO</option>
                   </select>
  Prior Auth Start Date  :<br>
  <input class="form-control input-sm" type="text" name="pt_auth_sdate" placeholder=" mm/dd/yyyy"/>
  Prior Auth End Date  :<br>
  <input class="form-control input-sm" type="text" name="pt_auth_edate" placeholder=" mm/dd/yyyy"/>
  Case Management  :<br>
  <textarea class="form-control input-sm" type="text" name="cm" value="Use 1,2,3,4,5,0 for Note Values. Enter as : MONTH - NOTE - SUMMARY"/></textarea>
  Timeline :<br>
  <select class="form-control input-sm" name="timeline_month" tabindex="-1" aria-hidden="true" required/>
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
   <input class="form-control input-sm" type="text" name="timeline_year" placeholder="Enter Year"/>
  
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
