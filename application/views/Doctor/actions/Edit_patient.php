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

  $doc = mysqli_query($conn,"SELECT * FROM patient WHERE id = '$var'");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
	$query1 = mysqli_query($conn, "SET NAMES utf8");

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mname = $_POST['mname'];
  $id = $_POST['pid'];
  $sex = $_POST['sex'];
  $age = $_POST['age'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $insurance = $_POST['insurance'];
  $preg = $_POST['pregnant'];
  $insurancenum = $_POST['insurancenum'];

  if(isset($_POST['input']))
    {
  $sql = "UPDATE patient SET f_name = '$fname', last_name = '$lname', sex = '$sex', age = '$age', address = '$address', email = '$email',phone = '$phone',insurance = '$insurance', pregnant = '$preg', m_name = '$mname',insurance_num = '$insurancenum'  WHERE id = '$id'";
  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:DoctorCrudpatient');
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);

}

?>


<H3 align="center"> Edit Patient </H3>
<br>
<p align="center"> <font color="red"> You are editing an existing record. Only Change the fields which you want to edit. </font> </p>

<div class="container" style="left:80px;position:relative;">
<div class="col-xs-8" align="left">
  <div class="form-group" align="left">
    <form class="form-group" action="" method="POST">
    Patient:<br>
    <?php
                    while($record = mysqli_fetch_array($doc)):?>
      <input class="form-control input-sm" type="text" name="pid" value="<?php echo $record['id'];?>" readonly/>
                                                  <br>
    First Name:<br>
    <input class="form-control input-sm" type="text" name="fname" value="<?php echo $record['f_name'];?>"/>
    Middle Name:<br>
    <input class="form-control input-sm" type="text" name="mname" value="<?php echo $record['m_name'];?>"/>
    Last Name:<br>
    <input class="form-control input-sm" type="text" name="lname" value="<?php echo $record['last_name'];?>"/>
    Sex:
    <input type="text" class="form-control input-sm" name="sex" value="<?php echo $record['sex'];?>" required/>

    Pregnant:<br>
    <input class="form-control input-sm" type="text" name="pregnant"  value="<?php echo $record['pregnant'];?>"/>
    Age:<br>
    <input class="form-control input-sm" type="text" name="age"  value="<?php echo $record['age'];?>"/>
    Email:<br>
    <input class="form-control input-sm" type="text" name="email"  value="<?php echo $record['email'];?>"/>
    Address:<br>
    <input class="form-control input-sm" type="text" name="address" value="<?php echo $record['address'];?>" />
    Phone Number:<br>
    <input class="form-control input-sm" type="text" name="phone" value="<?php echo $record['phone'];?>" />
    Insurance Provider:<br>
    <input class="form-control input-sm" type="text" name="insurance" value="<?php echo $record['insurance'];?>" />
    Insurance Number:<br>
    <input class="form-control input-sm" type="text" name="insurancenum" value="<?php echo $record['insurance_num'];?>" />
    <br>
    <?php endwhile;?>
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
