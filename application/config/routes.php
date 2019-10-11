<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['biodata'] = 'home/biodata';
$route['education'] = 'home/education';
$route['experience'] = 'home/experience';
$route['portofolio'] = 'home/portofolio';
$route['contact'] = 'home/contact';

$route['admin'] = 'login';
$route['admin/biodata'] = 'admin/biodata';
$route['admin/contact'] = 'admin/contact';
$route['admin/education'] = 'admin/education';
$route['admin/experience'] = 'admin/experience';
$route['admin/portofolio'] = 'admin/portofolio';
$route['admin/socialmedia']  = 'admin/socialmedia';
$route['admin/ability']  = 'admin/ability';