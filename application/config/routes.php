<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['products'] = 'products/index';
$route['authors'] = 'authors/index';
$route['services'] = 'services/index';
$route['subscription'] = 'subscription/index';
$route['books'] = 'books/index';
$route['auth'] = 'auth/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
