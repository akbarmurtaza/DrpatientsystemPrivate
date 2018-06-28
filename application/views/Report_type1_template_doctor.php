<?php

$servername = "localhost";
$username = "snk42";
$password = "Healing4all!";
$dbname = "drpatient";

$conn = new mysqli($servername, $username, $password, $dbname);

$date = date('Y/m/d h:i:s a', time());

$name = $this->session->tempdata('name');
$month = $this->session->tempdata('month');
$date1 = $this->session->tempdata('date');
$dept = $this->session->tempdata('dept');
$user = $this->session->userdata('username');

$code = $this->session->userdata('username');

$result = mysqli_query($conn,"INSERT into report_log(created_date,created_by,type,time_month,time_year)VALUES('$date','$user','All records','ALL','ALL')");

?>


<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  table, th, td {
      vertical-align: top;
      border: 2px solid silver;
      font-size: 13px;
  }
  table {
      border-collapse: collapse;
        border: 2px solid silver;
  		font-size:15px;
  }
  </style>
</head>


<H3 align="center" Color="#C4C2C1"><b> 2018 FMHC PATIENT SHEET </b></H3>

<table style="height: 60px;width: 450px; margin-left: auto; margin-right: auto; border: 2px solid silver;" width="385">
<tbody>
<tr>
<td style="width: 95px;"><font color="silver"><b>Month</b></font></td>
<td style="width: 95px;"><?php echo $month ?></td>
<td style="width: 97px;"><font color="silver"><b>Start/End Date</b></font></td>
<td style="width: 97px;"><?php echo $date ?></td>
</tr>
<tr>
<td style="width: 95px;"><font color="silver"><b>Performed by</b></font></td>
<td style="width: 95px;"><?php echo $name ?></td>
<td style="width: 97px;"><font color="silver"><b>Department</b></font></td>
<td style="width: 97px;"><?php echo $dept ?></td>
</tr>
</tbody>
</table>

<br>
<br>
<div class="container">
<table name = "attendance" id= "attendance" class="table-bordered table-striped table-condensed cf" align="center">
<tr>
            <th>No.</th>
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
$inv = "SELECT patient.id,patient.f_name as fname,patient.last_name as lname,patient.m_name as mname, patient.sex as sex, patient.age as age, report1.active as active,report1.id as reportid, report1.dose as dose, report1.tel_health as tel, report1.pill as pill, report1.PE as pe, report1.kasper as kasper,report1.lastuds as uds,report1.last_visit as lv,report1.tp_start as tpstart,report1.tp_reassessment as reass,report1.pt_medmanagement as med,report1.pt_dissum as diss,report1.pt_relapse as relapse,report1.pt_relapsehist as relapsehist,report1.pt_auth as auth,report1.pt_auth_start_date as sdate,report1.pt_auth_end_date as edate,report1.cm_summary as cm, report1.patient_id FROM patient INNER JOIN report1 ON patient.id = report1.patient_id WHERE report1.show_ = 'YES' and report1.added_by = '$code'";
$atten = mysqli_query($conn,$inv);
          					$value=0;
          					$numbers=1;
          					foreach($atten as $pro){
          					?>
          					<tr >
          	                <td><font color="orange"><?php echo $numbers;?></font></td>
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
          					</tr>

          		           <?php $numbers++; $value++;} ?>
											 </table>
