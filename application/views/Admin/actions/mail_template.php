<?php
$this->load->helper('url');


$servername = "localhost";
$username = "snk42";
$password = "Healing4all!";
$dbname = "drpatient";

$conn = new mysqli($servername, $username, $password, $dbname);

$rid = $this->session->tempdata('id');
 ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
   <p><font color= "red"> You are receiving this message as your email is binded to an account on the system. If you are receiving this message by mistake, then delete it. DO not forward this message. CONIFDENTIAL INFORMATION.</font></p>
</div>
<br>
<br>
<table name = "attendance" id= "attendance" class="table table-dark table-striped">
  <tr>
              <th>No.</th>
              <th>Report ID</th>
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
$inv = "SELECT patient.id,patient.f_name as fname,patient.last_name as lname, patient.sex as sex, patient.age as age, report1.active as active,report1.id as reportid, report1.dose as dose, report1.tel_health as tel, report1.pill as pill, report1.PE as pe, report1.kasper as kasper,report1.lastuds as uds,report1.last_visit as lv,report1.tp_start as tpstart,report1.tp_reassessment as reass,report1.pt_medmanagement as med,report1.pt_dissum as diss,report1.pt_relapse as relapse,report1.pt_relapsehist as relapsehist,report1.pt_auth as auth,report1.pt_auth_start_date as sdate,report1.pt_auth_end_date as edate,report1.cm_summary as cm, report1.patient_id FROM patient INNER JOIN report1 ON patient.id = report1.patient_id WHERE report1.show_ = 'YES' AND report1.id = '$rid'";
$atten = mysqli_query($conn,$inv);
          					$value=0;
          					$numbers=1;
          					foreach($atten as $pro){
          					?>
          					<tr >
          	                <td><font color="orange"><?php echo $numbers;?></font></td>
                            <td><?php echo $pro['reportid'];?></td>
                   			 <td><?php echo $pro['fname']." ".$pro['lname'];?></td>

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
          					</tr>

          		           <?php $numbers++; $value++;} ?>
											 </table>
											 </body>
</html>
