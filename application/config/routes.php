<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['mpdf-test'] = 'mpdf_test';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin-website/login.html'] = 'Auth/index';
$route['admin-website'] = 'Admin/index';
$route['admin-website/dashboard'] = 'Admin/index';
$route['admin-website/report_regulasi/(:any)'] = 'Admin/report_regulasi';
$route['admin-website/regulasi.html'] = 'Admin/regulasi';
$route['admin-website/logout'] = 'Auth/logout';
$route['admin-website/input.html'] = 'Admin/addregulasi';
$route['admin-website/insert.html'] = 'Admin/insert';
$route['admin-website/detil/(:any)'] = 'Admin/detail/$1';
$route['admin-website/update.html'] = 'Admin/update';
$route['admin-website/evaluasi.html'] = 'Admin/evaluasi';
$route['admin-website/updatev.html'] = 'Admin/updatev';
$route['admin-website/evalu/(:any)'] = 'Admin/evalu/$1';