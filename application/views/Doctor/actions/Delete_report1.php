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

  $doc = mysqli_query($conn,"SELECT * FROM doctor WHERE id = '$var'");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
	$query1 = mysqli_query($conn, "SET NAMES utf8");

  if(isset($_POST['input']))
    {
  $sql = "DELETE FROM report1 where id = '$var'";
  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:DoctorShowreport1');
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);

}

?>


<H3 align="center"> Delete Report 1 Slot </H3>
<br>
<p align="center"> <font color="red"> You are about to delete the following report. </font> </p>

<div class="container" style="left:80px;position:relative;">
<div class="col-xs-8" align="left">
  <div class="form-group" align="left">
<form class="form-group" action="" method="POST">

  <table name = "attendance" id= "attendance" class="table-bordered table-striped table-condensed cf">
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
  					</tr>

            <?php
  					mysqli_query("SET NAMES 'utf8'");
  mysqli_query('SET CHARACTER SET utf8');
  $inv = "SELECT patient.id,patient.f_name as fname,patient.last_name as lname, patient.sex as sex, patient.age as age, report1.active as active,report1.id as reportid, report1.dose as dose, report1.tel_health as tel, report1.pill as pill, report1.PE as pe, report1.kasper as kasper,report1.lastuds as uds,report1.last_visit as lv, report1.patient_id FROM patient INNER JOIN report1 ON patient.id = report1.patient_id WHERE report1.id = '$var' ";
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
                          <br>
  <input type="submit" class="btn btn-Danger" name="input" value="Delete!" >
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
