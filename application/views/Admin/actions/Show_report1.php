 <?php
$this->load->view('header/header.php');
$this->load->view('header/Verticalnav.php');
$this->load->helper('url');


$servername = "localhost";
$username = "snk42";
$password = "Healing4all!";
$dbname = "drpatient";

$conn = new mysqli($servername, $username, $password, $dbname);
$result = mysqli_query($conn,"SELECT * FROM doctor'");

if(isset($_POST['input']))
  {
    $var = $_POST['report'];
    $this->session->set_tempdata('id', $var, 300);
    header('location:Editreport1');
}

if(isset($_POST['delete']))
  {
    $var = $_POST['report'];
    $this->session->set_tempdata('id', $var, 300);
    header('location:Deletereport1');
}


 ?>

<h3 align="center"> Report Slot Index </h3>
<br>
<div class="container">
 <H4> Report Slot Search </H4>
 <br>
 <nav>
 <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
        Search By Name</a>
        <a class="nav-item nav-link " id="nav-src-tab" data-toggle="tab" href="#nav-src" role="tab" aria-controls="nav-src" aria-selected="false">
        Search By Month/Year</a>
      </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
            <!-- Owner Data -->
              <div class="tab-pane fade active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
 <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Enter Patient Name">
 </div>
 <div class="tab-pane fade" id="nav-src" role="tabpanel" aria-labelledby="nav-src-tab">
 <input type="text" class="form-control" id="myInput2" onkeyup="myFunction2()" placeholder="Enter Month/Year or Combination">
 </div>
 </div>
<br>
<div class="container">
<table name = "attendance" id= "myTable" class="table-bordered table-striped table-condensed cf">
<tr>
            <th>No.</th>
            <th>Report ID</th>
            <th>Time Period</th>
						<th>Patient Name</th>
<th>
						Sex
					</th>
						<th>
							Age
						</th>
            <th>
							Active CM
						</th>
            <th>
							Dose
						</th>
            <th>
							Tele Health (1/30) on site
						</th>
            <th>
							Pill Ct (2/yr)
						</th>
            <th>
							PE 1/30d
						</th>
            <th>
							Kasper ref #
						</th>
            <th>
							Last UDS
						</th>
            <th>
              Last Counseling Visit
            </th>
            <th>
            Treatment Plan Start Date
            </th>
             <th>
            Treatment Plan Reassessment
            </th>
            <th>
            Patient Completed Medical Management
            </th>
            <th>
            Patient Discharge Summary
            </th>
            <th>
            Patient Relapse
            </th>
            <th>
            Patient Relapse History
            </th>
            <th>
            Prior Authorization
            </th>
            <th>
            Prior Auth Strart Date
            </th>
            <th>
            Prior Auth End Date
            </th>
            <th>
            Case Management
            </th>
            <th>
            Added By
            </th>
            
					</tr>

          <?php
					mysqli_query("SET NAMES 'utf8'");
mysqli_query('SET CHARACTER SET utf8');
$inv = "SELECT patient.id,patient.f_name as fname,patient.last_name as lname,patient.m_name as mname, patient.sex as sex, patient.age as age, report1.active as active,report1.id as reportid, report1.dose as dose, report1.tel_health as tel, report1.pill as pill, report1.PE as pe, report1.kasper as kasper,report1.lastuds as uds,report1.last_visit as lv,report1.tp_start as tpstart,report1.tp_reassessment as reass,report1.pt_medmanagement as med,report1.pt_dissum as diss,report1.pt_relapse as relapse,report1.pt_relapsehist as relapsehist,report1.pt_auth as auth,report1.pt_auth_start_date as sdate,report1.pt_auth_end_date as edate,report1.cm_summary as cm, report1.patient_id,report1.timeline_month as month,report1.timeline_year as year,report1.added_by as addby FROM patient INNER JOIN report1 ON patient.id = report1.patient_id WHERE report1.show_ = 'YES' ";
$atten = mysqli_query($conn,$inv);
          					$value=0;
          					$numbers=1;
          					foreach($atten as $pro){
          					?>
          					<tr >
          	                <td><font color="orange"><?php echo $numbers;?></font></td>
                            <td><?php echo $pro['reportid'];?></td>
                            <td><?php echo $pro['month']." ".$pro['year'];?></td>
                   			 <td><?php echo $pro['fname']." ".$pro['lname']." ".$pro['mname'];?></td>

                      <td><font color="black"><?php echo $pro['sex'];?></font></td>
                       <td>
                         <font color="black"><?php echo $pro['age'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['active'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['dose'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['tel'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['pill'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['pe'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['kasper'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['uds'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['lv'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo date('m/d/Y',strtotime($pro['tpstart']));?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['reass'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['med'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['diss'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['relapse'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['relapsehist'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['auth'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo date('m/d/Y',strtotime($pro['sdate']));?>
                       </td>
                       <td>
                         <font color="red"><?php echo date('m/d/Y',strtotime($pro['edate']));?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['cm'];?>
                       </td>
                       <td>
                         <font color="green"><?php echo $pro['addby'];?>
                       </td>
                       
          					</tr>

          		           <?php $numbers++; $value++;} ?>
											 </table>
                       <br>
                       <H3> Edit Report Slot </H3>
                       <br>
                       <form class="form-group" action="" method="POST">
                         <?php
                                                       $inv = mysqli_query($conn, "SELECT patient.id,patient.f_name as fname,patient.last_name as lname, patient.sex as sex, patient.age as age, report1.active as active, report1.dose as dose, report1.tel_health as tel, report1.pill as pill, report1.PE as pe,report1.id as reportid,report1.show_ as show_, report1.kasper as kasper,report1.lastuds as uds,report1.last_visit as lv, report1.patient_id FROM patient INNER JOIN report1 ON patient.id = report1.patient_id ");
                                                      ?>
                                                      <select name="report" id="owner_id"  tabindex="-1" aria-hidden="true" required/>
                                                                          <option value="" selected disabled>----Select Account to edit----</option>
                                                                                              <?php while($record2 = mysqli_fetch_array($inv)):?>
                                                                          <option value="<?php echo $record2['reportid'];?>">  <?php echo "Patient: ".$record2['fname']." ".$record2['lname']." Show in Report : ".$record2['show_'];?></option>
                                                                          <?php endwhile;?>
                                                                          <input type="submit" class="btn btn-primary" name="input" value="Edit" >
                                                                          <input type="submit" class="btn btn-Danger" name="delete" value="Delete" >
                                                                       </select>
                       </form>


                       <br>
                       <br>
                       <h3 align="center"> Inactive Slot Index </h3>
                       <br>
                       <br>
                       <div class="container">
                       <table name = "attendance" id= "attendance" class="table-bordered table-striped table-condensed cf">
                       <tr>
                                   <th>No.</th>
                                   <th>Time Period</th>
                       						<th>Patient Name</th>
                       <th>
                       						Sex
                       					</th>
                       						<th>
                       							Age
                       						</th>
                                   <th>
                       							Active CM
                       						</th>
                                   <th>
                       							Dose
                       						</th>
                                   <th>
                       							Tele Health (1/30) on site
                       						</th>
                                   <th>
                       							Pill Ct (2/yr)
                       						</th>
                                   <th>
                       							PE 1/30d
                       						</th>
                                   <th>
                       							Kasper ref #
                       						</th>
                                   <th>
                       							Last UDS
                       						</th>
                                   <th>
                                     Last Counseling Visit
                                   </th>
                                   <th>
            Treatment Plan Start Date
            </th>
             <th>
            Treatment Plan Reassessment
            </th>
            <th>
            Patient Completed Medical Management
            </th>
            <th>
            Patient Discharge Summary
            </th>
            <th>
            Patient Relapse
            </th>
            <th>
            Patient Relapse History
            </th>
            <th>
            Prior Authorization
            </th>
            <th>
            Prior Auth Strart Date
            </th>
            <th>
            Prior Auth End Date
            </th>
            <th>
            Case Management
            </th>
            <th>
            Added By
            </th>
                       					</tr>

                                 <?php
                       					mysqli_query("SET NAMES 'utf8'");
                       mysqli_query('SET CHARACTER SET utf8');
                       $inv = "SELECT patient.id,patient.f_name as fname,patient.last_name as lname, patient.sex as sex, patient.age as age, report1.active as active,report1.id as reportid, report1.dose as dose, report1.tel_health as tel, report1.pill as pill, report1.PE as pe, report1.kasper as kasper,report1.lastuds as uds,report1.last_visit as lv,report1.tp_start as tpstart,report1.tp_reassessment as reass,report1.pt_medmanagement as med,report1.pt_dissum as diss,report1.pt_relapse as relapse,report1.pt_relapsehist as relapsehist,report1.pt_auth as auth,report1.pt_auth_start_date as sdate,report1.timeline_month as month,report1.timeline_year as year,report1.pt_auth_end_date as edate,report1.cm_summary as cm,report1.added_by as addby, report1.patient_id FROM patient INNER JOIN report1 ON patient.id = report1.patient_id WHERE report1.show_ = 'NO' ";
                       $atten = mysqli_query($conn,$inv);
                                 					$value=0;
                                 					$numbers=1;
                                 					foreach($atten as $pro){
                                 					?>
                                 					<tr >
                                 	                <td><font color="orange"><?php echo $numbers;?></font></td>
                                 	                
                                 	                <td><?php echo $pro['month']." ".$pro['year'];?></td>
                                          			 <td><?php echo $pro['fname']." ".$pro['lname'];?></td>

                                             <td><font color="grey"><?php echo $pro['sex'];?></font></td>
                                              <td>
                                                <font color="grey"><?php echo $pro['age'];?>
                                              </td>
                                              <td>
                                                <font color="grey"><?php echo $pro['active'];?>
                                              </td>
                                              <td>
                                                <font color="grey"><?php echo $pro['dose'];?>
                                              </td>
                                              <td>
                                                <font color="grey"><?php echo $pro['tel'];?>
                                              </td>
                                              <td>
                                                <font color="grey"><?php echo $pro['pill'];?>
                                              </td>
                                              <td>
                                                <font color="grey"><?php echo $pro['pe'];?>
                                              </td>
                                              <td>
                                                <font color="grey"><?php echo $pro['kasper'];?>
                                              </td>
                                              <td>
                                                <font color="grey"><?php echo $pro['uds'];?>
                                              </td>
                                              <td>
                                                <font color="grey"><?php echo $pro['lv'];?>
                                              </td>
                                              <td>
                         <font color="red"><?php echo date('m/d/Y',strtotime($pro['tpstart']));?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['reass'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['med'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['diss'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['relapse'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['relapsehist'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['auth'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo date('m/d/Y',strtotime($pro['sdate']));?>
                       </td>
                       <td>
                         <font color="red"><?php echo date('m/d/Y',strtotime($pro['edate']));?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['cm'];?>
                       </td>
                       <td>
                         <font color="green"><?php echo $pro['addby'];?>
                       </td>
                                 					</tr>

                                 		           <?php $numbers++; $value++;} ?>
                       											 </table>
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

function myFunction() {
  // Declare variables 
  document.getElementById("myInput2").value="";
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function myFunction2() {
  // Declare variables 
  document.getElementById("myInput").value="";
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
