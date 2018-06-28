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

  $conn = new mysqli($servername, $username, $password, $dbname);

  $message = "Data Entry Successful";

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
  $sql = "INSERT INTO doctor VALUES('$fname','$lname','$id','$email','$address','$phone','$type','$status','$pass')";
  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:Admin_adddoctor');
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
}

?>


<H3 align="center"> Add New Doctor </H3>
<br>


<div class="container" style="left:80px;position:relative;">
<div class="col-xs-8" align="left">
  <div class="form-group" align="left">
<form class="form-group" action="" method="POST">
  First Name:<br>
  <input class="form-control input-sm" type="text" name="f_name" placeholder="First Name" required />
  Last Name:<br>
  <input class="form-control input-sm" type="text" name="l_name" placeholder="Last Name" />
  ID:<br>
  <input class="form-control input-sm" type="text" name="id" placeholder="Enter Doctor ID Number" required/>
  Email:<br>
  <input class="form-control input-sm" type="text" name="email" placeholder="Email" required/>
  Password:<br>
  <input class="form-control input-sm" type="text" name="password" placeholder="Password" required/>
  Address:<br>
  <input class="form-control input-sm" type="text" name="address" placeholder="Address" required/>
  Phone Number:<br>
  <input class="form-control input-sm" type="text" name="phone_num" placeholder="Phone Number" />
  Area of Expertise:<br>
  <input class="form-control input-sm" type="text" name="type" placeholder="Expertise" />
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
