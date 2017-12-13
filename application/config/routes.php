<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'home/login';

$route['event'] = 'home/event';
$route['event/(:num)/(:any)'] = 'home/event_detail/$1/$2';

// Admin
$route['u'] = 'user';
$route['u/add'] = 'user/add_event';
$route['u/logout'] = 'home/logout';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
