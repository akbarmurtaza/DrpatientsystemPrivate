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

  $doc = mysqli_query($conn,"SELECT * FROM doctor WHERE id = '$var'");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
	$query1 = mysqli_query($conn, "SET NAMES utf8");

  $fname = $_POST['f_name'];
  $lname = $_POST['l_name'];
  $id = $_POST['id'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $address = $_POST['address'];
  $phone = $_POST['phone_num'];
  $type = $_POST['type'];
  $status = $_POST['status'];

  if(isset($_POST['input']))
    {
  $sql = "UPDATE doctor SET f_name = '$fname', l_name = '$lname',id = '$id',email = '$email',address = '$address',phone = '$phone',type = '$type',d_status = '$status',password_doc = '$pass' WHERE id = '$var'";
  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:Cruddoctor');
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);

}

?>


<H3 align="center"> Edit Doctor </H3>
<br>
<p align="center"> <font color="red"> You are editing an existing record. Only Change the fields which you want to edit. </font> </p>

<div class="container" style="left:80px;position:relative;">
<div class="col-xs-8" align="left">
  <div class="form-group" align="left">
<form class="form-group" action="" method="POST">
  <?php
                               while($record = mysqli_fetch_array($doc)):?>

  First Name:<br>
  <input class="form-control input-sm" type="text" name="f_name" placeholder="First Name" value="<?php echo $record['f_name'];?>" required />
  Last Name:<br>
  <input class="form-control input-sm" type="text" name="l_name" placeholder="Last Name" value="<?php echo $record['l_name'];?>"/>
  ID:<br>
  <input class="form-control input-sm" type="text" name="id" placeholder="Enter Doctor ID Number" value="<?php echo $record['id'];?>"required/>
  Email:<br>
  <input class="form-control input-sm" type="text" name="email" placeholder="Email" value="<?php echo $record['email'];?>"required/>
  Password:<br>
  <input class="form-control input-sm" type="text" name="password" placeholder="Password" value="<?php echo $record['password_doc'];?>"required/>
  Address:<br>
  <input class="form-control input-sm" type="text" name="address" placeholder="Address" value="<?php echo $record['address'];?>"required/>
  Phone Number:<br>
  <input class="form-control input-sm" type="text" name="phone_num" placeholder="Phone Number" value="<?php echo $record['phone'];?>"/>
  Area of Expertise:<br>
  <input class="form-control input-sm" type="text" name="type" placeholder="Expertise" value="<?php echo $record['type'];?>"/>
    <?php endwhile;?>
  Status:<br>
  <select class="form-control input-sm" name="status" tabindex="-1" aria-hidden="true" required/>
                     <option value="" selected disabled>----Select STATUS----</option>
                     <option value="active" >ACTIVE</option>
                     <option value="inactive" >INACTIVE</option>
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
