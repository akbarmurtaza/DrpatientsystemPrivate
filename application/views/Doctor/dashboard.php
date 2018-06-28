<?php
$this->load->view('header/docheader.php');
$this->load->view('header/docVerticalnav.php');
$this->load->helper('url');

$name = $this->session->userdata('username');
?>



<div class="container-fluid" >
<div class="col-xs-12" align="center">
      <H1> WELCOME <?php echo $name ?> </H1>
				<br>
			<H3> USE THE NAVIGATION FOR ACTIONS OR CONSULT THE MANUAL </H3>
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

</body>
</html>
