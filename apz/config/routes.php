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
$route['club'] = 'club';
$route['software'] = 'club/profile/software';
$route['jaringan'] = 'club/profile/jaringan';
$route['embedded'] = 'club/profile/embedded';
$route['multimedia'] = 'club/profile/multimedia';
$route['materi/(:any)'] = 'club/materi_detail/$1';

// Club Dashboard
$route['c'] = 'club/profile_edit';

$route['c/request'] = 'club/request';
$route['c/request/(:num)'] = 'club/request_detail/$1';

$route['c/materi'] = 'club/materi';
$route['c/add-materi'] = 'club/add_materi';
$route['c/edit-materi/(:num)'] = 'club/edit_materi/$1';
$route['c/hapus-materi/(:num)'] = 'club/hapus_materi/$1';

$route['c/post'] = 'club/post';
$route['c/add-post'] = 'club/add_post';

// Propose Project
$route['pengajuan'] = 'pengajuan';

// Admin event
$route['u'] = 'user';
$route['u/add'] = 'user/add_event';
$route['u/edit/(:num)'] = 'user/edit_event/$1';
$route['u/hapus/(:num)']= 'user/hapus_event/$1';

// Admin user
$route['u/user'] = 'user/user_home';
$route['u/add-user'] = 'user/add_user';
$route['u/edit-user/(:num)'] = 'user/edit_user/$1';
$route['u/hapus-user/(:num)']= 'user/hapus_user/$1';
$route['u/user-reset/(:num)']= 'user/reset_pass_user/$1';

// Admin project
$route['u/project'] = 'user/project_home';
$route['u/add-project'] = 'user/add_project';
$route['u/edit-project/(:num)'] = 'user/edit_project/$1';
$route['u/hapus-project/(:num)']= 'user/hapus_project/$1';
$route['u/kategori-project'] = 'user/kategori_project';
$route['u/add-kategori'] = 'user/add_kategori';
$route['u/edit-kategori/(:num)'] = 'user/edit_kategori/$1';

// Admin pengajuan
$route['u/request'] = 'user/request';
$route['u/request/(:num)'] = 'user/request_detail/$1';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
