<?php
$this->load->view('header/docheader.php');
$this->load->view('header/docVerticalnav.php');
$this->load->helper('url');


$servername = "localhost";
$username = "snk42";
$password = "Healing4all!";
$dbname = "drpatient";

$conn = new mysqli($servername, $username, $password, $dbname);

$name = $this->session->userdata('username');

$result = mysqli_query($conn,"SELECT * FROM patient where added_by = '$name'");

if(isset($_POST['input']))
  {
    $var = $_POST['report'];
    $this->session->set_tempdata('id', $var, 300);
    header('location:DoctorEditpatient');
}

if(isset($_POST['delete']))
  {
    $var = $_POST['report'];
    $this->session->set_tempdata('id', $var, 300);
    header('location:DoctorDeletepatient');
}

 ?>
 <html>
 <head>
 <style>

</style>
</head>
</html>
<h3 align="center"> Patient Index </h3>
<br>
<br>
<div class="container">
<form class="form-group" action="" method="POST">
                         <?php
                                                       $inv = mysqli_query($conn, "Select * from patient where added_by='$name'");
                                                      ?>
                                                      <select name="report" id="owner_id"  tabindex="-1" aria-hidden="true" required/>
                                                                          <option value="" selected disabled>----Select Account to edit----</option>
                                                                                              <?php while($record2 = mysqli_fetch_array($inv)):?>
                                                                          <option value="<?php echo $record2['id'];?>">  <?php echo "Patient ID: ".$record2['id']." Patient : ".$record2['f_name']." ".$record2['last_name']." Age : ".$record2['age'];?></option>
                                                                          <?php endwhile;?>
                                                                          <input type="submit" class="btn btn-primary" name="input" value="Edit" >
                                                                          <input type="submit" class="btn btn-Danger" name="delete" value="Delete" >
                                                                       </select>
                       </form>


                       <br>
                       <br>
                       </div>

 <div class="container">
 <H4> Patient Search </H4>
 <br>
 <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Enter First Name">
 <br>
 </div>
<div class="container">
<table name = "attendance" id= "myTable" class="table-bordered table-striped table-condensed cf">
<tr>
            <th>No.</th>
						<th>First Name</th>
						<th>
						Middle Name
					</th>
<th>
						Last Name
					</th>
						<th>
							Insurance Number
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
							Pregnant
						</th>
            <th>
							Age
						</th>
					</tr>

          <?php
					mysqli_query("SET NAMES 'utf8'");
mysqli_query('SET CHARACTER SET utf8');
$inv = "select * from patient where added_by = '$name'";
$atten = mysqli_query($conn,$inv);
          					$value=0;
          					$numbers=1;
          					foreach($atten as $pro){
          					?>
          					<tr >
          	                <td><font color="orange"><?php echo $pro['id'];?></font></td>
                   			 <td><?php echo $pro['f_name'];?></td>
                   			 <td><?php echo $pro['m_name'];?></td>
          <td><?php echo $pro['last_name'];?></td>
                      <td><font color="red"><?php echo $pro['insurance_num'];?></font></td>
                      <td><?php echo $pro['email'];?></td>
                      <td><?php echo $pro['address'];?></td>
                      <td><?php echo $pro['phone'];?></td>
                      <td><?php echo $pro['insurance'];?></td>
                       <td>
                         <font color="black"><?php echo $pro['sex'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['pregnant'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['age'];?>
                       </td>
          					</tr>

          		           <?php $numbers++; $value++;} ?>
											 </table>

                       <br>


                     </div>

<script>
function attendance(clicked_id)
{
  alert(clicked_id);
  document.getElementById("at_id").value = clicked_id;
  alert(document.getElementById("at_id").value);
}

function deleterow(clicked_id)
{
  document.getElementById("attendance").deleteRow(clicked_id);
}

function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
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
