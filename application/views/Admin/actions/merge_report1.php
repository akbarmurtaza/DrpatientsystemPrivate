<?php
$this->load->view('header/header.php');
$this->load->view('header/Verticalnav.php');
$this->load->helper('url');


$servername = "localhost";
$username = "snk42";
$password = "Healing4all!";
$dbname = "drpatient";

$conn = new mysqli($servername, $username, $password, $dbname);
$result = mysqli_query($conn,"SELECT * FROM patient'");

$name = $this->session->userdata('username');

if(isset($_POST['input']))
  {
    $m_old = $_POST['m_old'];
    $m_new = $_POST['m_new'];
    $y_old = $_POST['y_old'];
    $y_new = $_POST['y_new'];
    $upd1 = "UPDATE report1 set timeline_year = '$y_new' WHERE timeline_year = '$y_old'";
    $upd2 = "UPDATE report1 set timeline_month = '$m_new' WHERE timeline_month = '$m_old'";
    $updm = mysqli_query($conn,$upd1);
    $updy = mysqli_query($conn,$upd2);
}


 ?>

<h3 align="center"> Report Time Line Index </h3>
<br>
<p align="center"><font color="red"> Only Active report slots shown. To see all report slots, go to view/edit report. </font></font>
<br>
<div class="container">
<br>
<div class="form-group">
<form class="form-group" action="" method="POST">
  Shift Records from :<br>
  <br>
  <input type="text" class="form-control input-sm" name="m_old" placeholder="Month" >
  <br>
  <input type="text" class="form-control input-sm" name="y_old" placeholder="Year" >
  To:
  <br>
  <input type="text" class="form-control input-sm" name="m_new" placeholder="Month" >
  <br>
  <input type="text" class="form-control input-sm" name="y_new" placeholder="Year" >
  <br>
  <input type="submit" class="btn btn-info" name="input" value="Submit" >
  </form>
</div>
<div class="container">
<br>
<br>
<H4> Search </H4>
<input type="text" class="form-control" id="myInput2" onkeyup="myFunction2()" placeholder="Enter Month/Year or Combination">
</div>
<br>
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
            
					</tr>

          <?php
					mysqli_query("SET NAMES 'utf8'");
mysqli_query('SET CHARACTER SET utf8');
$inv = "SELECT patient.id,patient.f_name as fname,patient.last_name as lname,patient.m_name as mname, patient.sex as sex, patient.age as age, report1.active as active,report1.id as reportid, report1.dose as dose, report1.tel_health as tel, report1.pill as pill, report1.PE as pe, report1.kasper as kasper,report1.lastuds as uds,report1.last_visit as lv,report1.tp_start as tpstart,report1.tp_reassessment as reass,report1.pt_medmanagement as med,report1.pt_dissum as diss,report1.pt_relapse as relapse,report1.pt_relapsehist as relapsehist,report1.pt_auth as auth,report1.pt_auth_start_date as sdate,report1.pt_auth_end_date as edate,report1.cm_summary as cm, report1.patient_id,report1.timeline_month as month,report1.timeline_year as year FROM patient INNER JOIN report1 ON patient.id = report1.patient_id WHERE report1.show_ = 'YES' ";
$atten = mysqli_query($conn,$inv);
          					$value=0;
          					$numbers=1;
          					foreach($atten as $pro){
          					?>
          					<tr >
          	                <td><font color="black"><?php echo $numbers;?></font></td>
                            <td><font color="green"><?php echo $pro['reportid'];?></font></td>
                            <td><font color="Orange"><?php echo $pro['month']." ".$pro['year'];?></font></td>
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
                         <font color="black"><?php echo $pro['pe'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['kasper'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['uds'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['lv'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo date('m/d/Y',strtotime($pro['tpstart']));?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['reass'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['med'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['diss'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['relapse'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['relapsehist'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['auth'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo date('m/d/Y',strtotime($pro['sdate']));?>
                       </td>
                       <td>
                         <font color="black"><?php echo date('m/d/Y',strtotime($pro['edate']));?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['cm'];?>
                       </td>
                       
          					</tr>

          		           <?php $numbers++; $value++;} ?>
											 </table>

                     </div>

<script>


function myFunction2() {
  // Declare variables 
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
