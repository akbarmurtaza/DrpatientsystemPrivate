<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Admin/Login';
$route['Admin_Login'] = 'Admin/Login';
$route['Admin_Dashboard'] = 'Admin/Dashboard';
$route['Admin_adddoctor'] = 'Adminactions/Adddoc';
$route['Manageaccounts'] = 'Adminactions/Account_Panel';
$route['Cruddoctor'] = 'Adminactions/Crud_doctor';
$route['Editdoctor'] = 'Adminactions/Edit_doctor';
$route['Addpatient'] = 'Adminactions/Add_patient';
$route['Crudpatient'] = 'Adminactions/Crud_patient';
$route['Reportpanel'] = 'Adminactions/Report_panel';
$route['Addreport1'] = 'Adminactions/Add_report1';
$route['Showreport1'] = 'Adminactions/Show_report1';
$route['Editreport1'] = 'Adminactions/Edit_report1';
$route['Generatereport1'] = 'Adminactions/Generate_report1';
$route['Report1table'] = 'Adminactions/Report1_table';
$route['Report1table_timed'] = 'Adminactions/Report1_table_timed';
$route['Deletereport1'] = 'Adminactions/Report1_delete';
$route['Editpatient'] = 'Adminactions/Patient_edit';
$route['Deletepatient'] = 'Adminactions/Patient_delete';
$route['Adminsettings'] = 'Adminactions/Admin_settings';
$route['Mergereport1'] = 'Adminactions/Merge_report1';
$route['Reportlogs'] = 'Adminactions/Report_logs';
$route['Patientwaiting'] = 'Adminactions/Patient_waiting';
$route['Patientwaitingindex'] = 'Adminactions/Patient_waitingindex';
$route['Notifications'] = 'Adminactions/Email';
$route['Sendmail'] = 'Adminactions/Send_mail';

//////////////DOCTOR ROUTES

$route['Doctor_Login'] = 'Doctor/Login';
$route['Doctor_Dashboard'] = 'Doctor/Dashboard';
$route['DoctorPatients'] = 'Doctoractions/Account_Panel';
$route['DoctorAddpatient'] = 'Doctoractions/Add_patient';
$route['DoctorCrudpatient'] = 'Doctoractions/Crud_patient';
$route['DoctorReportpanel'] = 'Doctoractions/Report_panel';
$route['DoctorAddreport1'] = 'Doctoractions/Add_report1';
$route['DoctorShowreport1'] = 'Doctoractions/Show_report1';
$route['DoctorEditreport1'] = 'Doctoractions/Edit_report1';
$route['DoctorGeneratereport1'] = 'Doctoractions/Generate_report1';
$route['DoctorReport1table'] = 'Doctoractions/Report1_table';
$route['DoctorReport1table_timed'] = 'Doctoractions/Report1_table_timed';
$route['DoctorDeletereport1'] = 'Doctoractions/Report1_delete';
$route['DoctorEditpatient'] = 'Doctoractions/Patient_edit';
$route['DoctorDeletepatient'] = 'Doctoractions/Patient_delete';
$route['DoctorMergereport1'] = 'Doctoractions/Merge_report1';
$route['DoctorPatientwaiting'] = 'Doctoractions/Patient_waiting';
$route['DoctorPatientwaitingindex'] = 'Doctoractions/Patient_waitingindex';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
