<?php
$this->load->view('header/header.php');
$this->load->view('header/Verticalnav.php');
$this->load->helper('url');


$servername = "localhost";
$username = "snk42";
$password = "Healing4all!";
$dbname = "drpatient";

$conn = new mysqli($servername, $username, $password, $dbname);
$result = mysqli_query($conn,"SELECT * FROM doctor'");

if(isset($_POST['input']))
  {
    $var = $_POST['doctor'];
    $this->session->set_tempdata('id', $var, 300);
    header('location:Editdoctor');
}


 ?>

<h3 align="center"> Doctor Account Index </h3>
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
						Email
					</th>
						<th>
							Address
						</th>
            <th>
							Phone
						</th>
            <th>
							Expertise
						</th>
            <th>
							Status
						</th>
            <th>
							Password
						</th>
					</tr>

          <?php
					mysqli_query("SET NAMES 'utf8'");
mysqli_query('SET CHARACTER SET utf8');
$inv = "select * from doctor";
$atten = mysqli_query($conn,$inv);
          					$value=0;
          					$numbers=1;
          					foreach($atten as $pro){
          					?>
          					<tr >
          	                <td><font color="orange"><?php echo $numbers;?></font></td>
                   			 <td><?php echo $pro['f_name'];?></td>
          <td><?php echo $pro['l_name'];?></td>
                      <td><font color="black"><?php echo $pro['id'];?></font></td>
                       <td>
                         <font color="black"><?php echo $pro['email'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['address'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['phone'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['type'];?>
                       </td>
                       <td>
                         <font color="black"><?php echo $pro['d_status'];?>
                       </td>
                       <td>
                         <font color="red"><?php echo $pro['password_doc'];?>
                       </td>
          					</tr>

          		           <?php $numbers++; $value++;} ?>
											 </table>
                       <br>
                       <H3> Edit Doctor Account </H3>
                       <br>
                       <form class="form-group" action="" method="POST">
                         <?php
                                                       $inv = mysqli_query($conn, "select * from doctor");
                                                      ?>
                                                      <select name="doctor" id="owner_id"  tabindex="-1" aria-hidden="true" required/>
                                                                          <option value="" selected disabled>----Select Account to edit----</option>
                                                                                              <?php while($record2 = mysqli_fetch_array($inv)):?>
                                                                          <option value="<?php echo $record2['id'];?>">  <?php echo $record2['id']." ".$record2['f_name']." ".$record2['l_name']." ".$record2['email'];?></option>
                                                                          <?php endwhile;?>
                                                                          <input type="submit" class="btn btn-primary" name="input" value="Edit" >
                                                                       </select>
                       </form>
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
