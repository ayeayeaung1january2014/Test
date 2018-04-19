<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['(:num)'] = 'PropertiesController/viewDetail/$1';
$route['get-property-by-id/(:num)'] = 'PropertiesController/getPropertyById/$1';
$route['change-shortlist-flag/(:num)']= 'PropertiesController/changeShortList/$1';
$route['shortlist']= 'PropertiesController/showShortList';
$route['default_controller'] = 'PropertiesController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
