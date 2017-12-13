<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['event'] = 'home/event';
$route['login'] = 'home/login';
$route['u'] = 'user';
$route['u/add'] = 'user/add_event';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
