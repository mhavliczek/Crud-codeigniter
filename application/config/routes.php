<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'usuarios_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['usuarios/add'] = 'usuarios_controller/add';
$route['usuarios/mod/(:num)'] = 'usuarios_controller/mod/$1';
$route['usuarios/eliminar/(:num)'] = 'usuarios_controller/eliminar/$1';

