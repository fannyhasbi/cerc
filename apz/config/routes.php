<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['event'] = 'home/event';
$route['event/(:num)/(:any)'] = 'home/event_detail/$1/$2';
$route['login'] = 'home/login';
$route['u/logout'] = 'home/logout';

// Club
$route['software'] = 'club';
$route['jaringan'] = 'club';
$route['embedded'] = 'club';
$route['multimedia'] = 'club';

// Admin
$route['u'] = 'user';
$route['u/add'] = 'user/add_event';
$route['u/edit/(:num)'] = 'user/edit_event/$1';
$route['u/hapus/(:num)']= 'user/hapus_event/$1';
$route['u/add_user'] = 'user/add_user';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
