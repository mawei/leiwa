<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = "welcome/index";

$route['news/(:any)'] = "welcome/news/$1/$2/$3";
// $route['news/(:any)/(:any)/(:any)'] = "welcome/news/$1/$2/$3";
$route['news/(:any)/(:any)'] = "welcome/news/$1/$2";

$route['about'] = "welcome/about";
$route['about2'] = "welcome/about2";
$route['about3'] = "welcome/about3";
$route['about4'] = "welcome/about4";
$route['contactus'] = "welcome/contactus";
$route['experience'] = "welcome/experience";
$route['experience2'] = "welcome/experience2";
$route['index'] = "welcome/index";
$route['mystyle'] = "welcome/mystyle";
$route['mystyle2'] = "welcome/mystyle2";
$route['mystyle3'] = "welcome/mystyle3";
$route['mystyle3/(:num)/(:num)'] = "welcome/mystyle3/$1/$2";
$route['mystyle4'] = "welcome/mystyle4";
$route['news'] = "welcome/news";
$route['newsdetail/(:num)'] = "welcome/newsdetail/$1";
$route['pro'] = "welcome/pro";
$route['prodetail/(:num)/(:num)'] = "welcome/prodetail/$1/$2";
$route['prolist/(:num)/(:num)'] = "welcome/prolist/$1/$2";

$route['404_override'] = '';

$route['adminpanel'] = "adminpanel/manage";
$route['adminpanel/manage/go_(:num)'] = "adminpanel/manage/go/$1";
$route['adminpanel/login'] = "adminpanel/manage/login";


$route['translate_uri_dashes'] = FALSE;
