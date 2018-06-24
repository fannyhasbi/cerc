<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'home/login';
$route['u/logout'] = 'home/logout';

// Event
$route['event'] = 'home/event';
$route['event/(:num)/(:any)'] = 'home/event_detail/$1/$2';

// Project
$route['project'] = 'home/project';

// Club
$route['software'] = 'club';
$route['jaringan'] = 'club';
$route['embedded'] = 'club';
$route['multimedia'] = 'club';

// Admin event
$route['u'] = 'user';
$route['u/add'] = 'user/add_event';
$route['u/edit/(:num)'] = 'user/edit_event/$1';
$route['u/hapus/(:num)']= 'user/hapus_event/$1';

// Admin user
$route['u/user'] = 'user/user_home';
$route['u/add_user'] = 'user/add_user';
$route['u/edit_user/(:num)'] = 'user/edit_user/$1';
$route['u/hapus_user/(:num)']= 'user/hapus_user/$1';
$route['u/user_reset/(:num)']= 'user/reset_pass_user/$1';

// Admin project
$route['u/project'] = 'user/project_home';
$route['u/add_project'] = 'user/add_project';
$route['u/edit_project/(:num)'] = 'user/edit_project/$1';
$route['u/hapus_project/(:num)']= 'user/hapus_project/$1';
$route['u/kategori_project'] = 'user/kategori_project';
$route['u/add_kategori'] = 'user/add_kategori';
$route['u/edit_kategori/(:num)'] = 'user/edit_kategori/$1';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
