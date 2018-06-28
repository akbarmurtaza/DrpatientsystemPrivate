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

  $name = $this->session->userdata('username');
  $name1 = $this->session->userdata('password');

  $message = "Data Entry Successful";

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
	$query1 = mysqli_query($conn, "SET NAMES utf8");

  $fname = $_POST['f_name'];
  $lname = $_POST['l_name'];
  $mname = $_POST['m_name'];
  $id = $_POST['id'];
  $sex = $_POST['sex'];
  $age = $_POST['age'];
  $addedby = $_POST['addedby'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $insurance = $_POST['insurance'];
  $preg = $_POST['preg'];
  $call = $_POST['call'];

  if(isset($_POST['input']))
    {
  $sql = "INSERT INTO waiting(f_name,last_name,sex,age,added_by,address,email,phone,insurance,insurance_num,pregnant,m_name,callin_date) VALUES('$fname','$lname','$sex','$age','$addedby','$address','$email','$phone','$insurance','$id','$preg','$mname',STR_TO_DATE('$call', '%m/%d/%Y'))";
  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:Patientwaiting');
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
}

?>


<H3 align="center"> Patient Waiting List </H3>
<br>


<div class="container" style="left:80px;position:relative;">
<div class="col-xs-8" align="left">
  <div class="form-group" align="left">
<form class="form-group" action="" method="POST">
  First Name:<br>
  <input class="form-control input-sm" type="text" name="f_name" placeholder="First Name" required />
  Middle Name:<br>
  <input class="form-control input-sm" type="text" name="m_name" placeholder="Middle Name"  />
  Last Name:<br>
  <input class="form-control input-sm" type="text" name="l_name" placeholder="Last Name" />
  Email:<br>
  <input class="form-control input-sm" type="text" name="email" placeholder="Enter patient Email" />
  Address:<br>
  <input class="form-control input-sm" type="text" name="address" placeholder="Enter patient Address" />
  Phone Number:<br>
  <input class="form-control input-sm" type="text" name="phone" placeholder="Enter patient Phone/Cell" />
  Insurance Name:<br>
  <input class="form-control input-sm" type="text" name="insurance" placeholder="Enter Insurance Name" />
  Insurance Number:<br>
  <input class="form-control input-sm" type="text" name="id" placeholder="Enter patient Insurance Number" />
  Sex:<br>
  <select class="form-control input-sm" name="sex" tabindex="-1" aria-hidden="true" required/>
                     <option value="" selected disabled>----Select Gender----</option>
                     <option value="F" >F</option>
                     <option value="M" >M</option>
                   </select>
  Pregnant:<br>
  <select class="form-control input-sm" name="preg" tabindex="-1" aria-hidden="true" required/>
                     <option value="" selected disabled>----Select----</option>
                     <option value="Yes" >Yes</option>
                     <option value="No" >No</option>
                     <option value="N/A" >Not Applicable</option>
                   </select>
  Age:<br>
  <input class="form-control input-sm" type="text" id="age" name="age" placeholder="Enter DOB YYYY/MM/DD" onchange="calcAge(this.value)" required/>
  Call in Date:
  <input class="form-control input-sm" type="text" id="call" name="call" placeholder="Enter Call in Date" required/>
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

function calcAge(datestring) {
  var birthday = +new Date(datestring);
  var age = ((Date.now() - birthday) / (31557600000));
  document.getElementById("age").value = parseInt(age);
}

</script>
