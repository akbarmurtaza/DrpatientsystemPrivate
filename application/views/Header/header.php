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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>

 .navbar {
   background-color: #9b59b6;
 }
 .navbar .navbar-brand {
   color: #ecf0f1;
 }
 .navbar .navbar-brand:hover,
 .navbar .navbar-brand:focus {
   color: #ecdbff;
 }
 .navbar .navbar-text {
   color: #ecf0f1;
 }
 .navbar .navbar-text a {
   color: #ecdbff;
 }
 .navbar .navbar-text a:hover,
 .navbar .navbar-text a:focus {
   color: #ecdbff;
 }
 .navbar .navbar-nav .nav-link {
   color: #ecf0f1;
   border-radius: .25rem;
   margin: 0 0.25em;
 }
 .navbar .navbar-nav .nav-link:not(.disabled):hover,
 .navbar .navbar-nav .nav-link:not(.disabled):focus {
   color: #ecdbff;
 }
 .navbar .navbar-nav .dropdown-menu {
   background-color: #9b59b6;
   border-color: #8e44ad;
 }
 .navbar .navbar-nav .dropdown-menu .dropdown-item {
   color: #ecf0f1;
 }
 .navbar .navbar-nav .dropdown-menu .dropdown-item:hover,
 .navbar .navbar-nav .dropdown-menu .dropdown-item:focus,
 .navbar .navbar-nav .dropdown-menu .dropdown-item.active {
   color: #ecdbff;
   background-color: #8e44ad;
 }
 .navbar .navbar-nav .dropdown-menu .dropdown-divider {
   border-top-color: #8e44ad;
 }
 .navbar .navbar-nav .nav-item.active .nav-link,
 .navbar .navbar-nav .nav-item.active .nav-link:hover,
 .navbar .navbar-nav .nav-item.active .nav-link:focus,
 .navbar .navbar-nav .nav-item.show .nav-link,
 .navbar .navbar-nav .nav-item.show .nav-link:hover,
 .navbar .navbar-nav .nav-item.show .nav-link:focus {
   color: #ecdbff;
   background-color: #8e44ad;
 }
 .navbar .navbar-toggle {
   border-color: #8e44ad;
 }
 .navbar .navbar-toggle:hover,
 .navbar .navbar-toggle:focus {
   background-color: #8e44ad;
 }
 .navbar .navbar-toggle .navbar-toggler-icon {
   color: #ecf0f1;
 }
 .navbar .navbar-collapse,
 .navbar .navbar-form {
   border-color: #ecf0f1;
 }
 .navbar .navbar-link {
   color: #ecf0f1;
 }
 .navbar .navbar-link:hover {
   color: #ecdbff;
 }

 @media (max-width: 575px) {
   .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
     color: #ecf0f1;
   }
   .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
   .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
     color: #ecdbff;
   }
   .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
     color: #ecdbff;
     background-color: #8e44ad;
   }
 }

 @media (max-width: 767px) {
   .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
     color: #ecf0f1;
   }
   .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
   .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
     color: #ecdbff;
   }
   .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
     color: #ecdbff;
     background-color: #8e44ad;
   }
 }

 @media (max-width: 991px) {
   .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
     color: #ecf0f1;
   }
   .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
   .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
     color: #ecdbff;
   }
   .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
     color: #ecdbff;
     background-color: #8e44ad;
   }
 }

 @media (max-width: 1199px) {
   .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
     color: #ecf0f1;
   }
   .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
   .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
     color: #ecdbff;
   }
   .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
     color: #ecdbff;
     background-color: #8e44ad;
   }
 }

 .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
   color: #ecf0f1;
 }
 .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
 .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
   color: #ecdbff;
 }
 .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
   color: #ecdbff;
   background-color: #8e44ad;
 }

 </style>
 </head>
 <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
     <div class="container-fluid">
         <div class="navbar-header"><a class="navbar-brand" href="<?php echo base_url();?>index.php/Admin/Dashboard"><span class="glyphicon glyphicon-home" style="font-size:30px;color:#2ECC71;"></span></a>
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
             </button>
         </div>
         <div class="collapse navbar-collapse navbar-menubuilder">
             <ul class="nav navbar-nav navbar-right">
                 <li><a href="<?php echo base_url();?>index.php/Admin/Intern" class="btn btn-geckoboard">Doctors</a>
                 </li>
                 <li><a href="<?php echo base_url();?>index.php/Admin/Member" class="btn btn-geckoboard">Patients</a>
                 </li>
                 <li><a href="<?php echo base_url();?>index.php/Attendance/Internattendance" class="btn btn-geckoboard">Login Placeholder</a>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 </html>
