<?PHP
$this->load->helper('url');
$this->load->helper('html');


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nerdware";

$conn = new mysqli($servername, $username, $password, $dbname);



 ?>

 <html>


 <head>
 <link rel="icon" href="<?php echo base_url(); ?>application/views/favicon.png" type="image/gif">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
 .navbar-inverse { background-color: #222222}
.navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus { background-color: #FF1C14}
.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus { background-color: #080808}
.dropdown-menu { background-color: #FF3019}
.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { background-color: #428BCA}
.navbar-inverse { background-image: none; }
.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { background-image: none; }
.navbar-inverse { border-color: #080808}
.navbar-inverse .navbar-brand { color: #999999}
.navbar-inverse .navbar-brand:hover { color: #FFFFFF}
.navbar-inverse .navbar-nav>li>a { color: #999999}
.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus { color: #FFFFFF}
.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus { color: #FFFFFF}
.navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus { color: #FFFFFF}
.dropdown-menu>li>a { color: #333333}
.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { color: #FFFFFF}
.navbar-inverse .navbar-nav>.dropdown>a .caret { border-top-color: #999999}
.navbar-inverse .navbar-nav>.dropdown>a:hover .caret { border-top-color: #FFFFFF}
.navbar-inverse .navbar-nav>.dropdown>a .caret { border-bottom-color: #999999}
.navbar-inverse .navbar-nav>.dropdown>a:hover .caret { border-bottom-color: #FFFFFF}



 </style>
 </head>
 <header class="navbar navbar-inverse navbar-static-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo base_url();?>index.php/Admin_Dashboard" class="navbar-brand"><span class="glyphicon glyphicon-tint"></span>  Dr Patient System Admin Panel</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="<?php echo base_url();?>index.php/Manageaccounts">Manage Accounts</a>
        </li>
				<li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions <b class="caret"></b></a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo base_url();?>index.php/Manageaccounts">Manage Accounts</a></li>
	          <li><a href="<?php echo base_url();?>index.php/Manageaccounts">Manage Patients</a></li>
	          <li><a href="<?php echo base_url();?>index.php/Reportpanel">Reports</a></li>
	        </ul>
	      </li>
        <li>
          <a href="<?php echo base_url();?>index.php/Notifications">Notifications</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>index.php/Admin/Logout">Logout</a></li>
          <li><a href="<?php echo base_url();?>index.php/Adminsettings">Settings</a></li>
        </ul>
      </li>
    </ul>
    </nav>
  </div>
</header>
 </html>
