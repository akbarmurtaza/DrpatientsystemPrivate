<?php
$this->load->view('header/header.php');
$this->load->view('header/Verticalnav.php');
$this->load->helper('url');


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drpatient";

$conn = new mysqli($servername, $username, $password, $dbname);
$result = mysqli_query($conn,"SELECT * FROM doctor'");

$name = $this->session->userdata('username');

 ?>

<h3 align="center"> Patient Index </h3>
<br>
<br>
<div class="container">
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
							Sex
						</th>
            <th>
							Age
						</th>
					</tr>

          <?php
					mysqli_query("SET NAMES 'utf8'");
mysqli_query('SET CHARACTER SET utf8');
$inv = "select * from patient";
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
</script>
