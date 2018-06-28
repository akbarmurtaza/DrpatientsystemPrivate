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

    $var = $this->session->tempdata('id');

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
	$query1 = mysqli_query($conn, "SET NAMES utf8");

  if(isset($_POST['input']))
    {
  $sql = "DELETE FROM patient where id = '$var'";
  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:Crudpatient');
  } else {
      echo "ERROR: " . "This Patient Account is referenced in a report slot. DELETE REPORT SLOT BEFOR DELETING PATIENT";
  }
mysqli_close($conn);

}

?>


<H3 align="center"> Delete Patient Slot </H3>
<br>
<p align="center"> <font color="red"> You are about to delete the following patient. </font> </p>

<div class="container" style="left:80px;position:relative;">
<div class="col-xs-8" align="left">
  <div class="form-group" align="left">
<form class="form-group" action="" method="POST">

  <table name = "attendance" id= "attendance" class="table-bordered table-striped table-condensed cf">
  <tr>
              <th>No.</th>
  						<th>First Name</th>
  <th>
  						Last Name
  					</th>
  						<th>
  							ID
  						</th>
              <th>
  							Email
  						</th>
              <th>
  							Address
  						</th>
  						<th>
  							Phone Number
  						</th>
  						<th>
  							Insurance Provider
  						</th>
  						<th>
  							Sex
  						</th>
              <th>
  							Age
  						</th>
  					</tr>

            <?php
  					mysqli_query("SET NAMES 'utf8'");
  mysqli_query('SET CHARACTER SET utf8');
  $inv = "select * from patient where id='$var'";
  $atten = mysqli_query($conn,$inv);
            					$value=0;
            					$numbers=1;
            					foreach($atten as $pro){
            					?>
            					<tr >
            	                <td><font color="orange"><?php echo $numbers;?></font></td>
                     			 <td><?php echo $pro['f_name'];?></td>
            <td><?php echo $pro['last_name'];?></td>
                        <td><font color="red"><?php echo $pro['id'];?></font></td>
                        <td><?php echo $pro['email'];?></td>
                        <td><?php echo $pro['address'];?></td>
                        <td><?php echo $pro['phone'];?></td>
                        <td><?php echo $pro['insurance'];?></td>
                         <td>
                           <font color="black"><?php echo $pro['sex'];?>
                         </td>
                         <td>
                           <font color="black"><?php echo $pro['age'];?>
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
