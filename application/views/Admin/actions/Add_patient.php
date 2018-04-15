<?php
$this->load->view('header/header.php');
$this->load->view('header/Verticalnav.php');
$this->load->helper('url');
?>


<?php
error_reporting(0);
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "drpatient";

  $conn = new mysqli($servername, $username, $password, $dbname);

  $name = $this->session->userdata('username');
  $name1 = $this->session->userdata('password');

  $message = "Data Entry Successful";

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
	$query1 = mysqli_query($conn, "SET NAMES utf8");

  $fname = $_POST['f_name'];
  $lname = $_POST['l_name'];
  $id = $_POST['id'];
  $sex = $_POST['sex'];
  $age = $_POST['age'];
  $addedby = $_POST['addedby'];

  if(isset($_POST['input']))
    {
  $sql = "INSERT INTO patient VALUES('$fname','$lname','$id','$sex','$age','$addedby')";
  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:Addpatient');
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
}

?>


<H3 align="center"> Add New Patient </H3>
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
  <input class="form-control input-sm" type="text" name="id" placeholder="Enter patient ID Number" required/>
  Sex:<br>
  <select class="form-control input-sm" name="sex" tabindex="-1" aria-hidden="true" required/>
                     <option value="" selected disabled>----Select Gender----</option>
                     <option value="F" >F</option>
                     <option value="M" >M</option>
                   </select>
  Age:<br>
  <input class="form-control input-sm" type="text" name="age" placeholder="Patient Age" required/>
  <input type="text" name="addedby" value="<?php echo $name.$name1;?>" hidden>
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
