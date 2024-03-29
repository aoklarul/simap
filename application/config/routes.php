<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Dashboard Controller
$route['dashboard'] = 'DashboardController/index';
$route['dashboard/grafik-kecamatan'] = 'DashboardController/grafik_kecamatan';
$route['dashboard/grafik-kelurahan'] = 'DashboardController/grafik_kelurahan';

// Dashboard Controller
$route['login'] = 'AuthController/index';
$route['logout'] = 'AuthController/logout';
$route['blocked'] = 'AuthController/blocked';

// Kecamatan Controller
$route['kecamatan'] = 'KecamatanController/index';
$route['kecamatan/create'] = 'KecamatanController/create';
$route['kecamatan/edit/(:any)'] = 'KecamatanController/edit/$1';
$route['kecamatan/delete/(:any)'] = 'KecamatanController/delete/$1';

// Kelurahan Controller
$route['kelurahan'] = 'KelurahanController/index';
$route['kelurahan/create'] = 'KelurahanController/create';
$route['kelurahan/edit/(:any)'] = 'KelurahanController/edit/$1';
$route['kelurahan/delete/(:any)'] = 'KelurahanController/delete/$1';

// User Controller
$route['user'] = 'UserController/index';
$route['user/create'] = 'UserController/create';
$route['user/reset/(:any)'] = 'UserController/reset_password/$1';
$route['user/delete/(:any)'] = 'UserController/delete/$1';
$route['user/aktif/(:any)'] = 'UserController/aktif/$1';
$route['user/nonaktif/(:any)'] = 'UserController/nonaktif/$1';

// User Controller
$route['profil'] = 'ProfilController/index';
$route['profil/edit-password'] = 'ProfilController/edit_password';
$route['profil/edit'] = 'ProfilController/edit';

// Jumlah PKH Controller
$route['pkh'] = 'PkhController/index';
$route['pkh/create'] = 'PkhController/create';
$route['pkh/edit/(:any)'] = 'PkhController/edit/$1';
$route['pkh/delete/(:any)'] = 'PkhController/delete/$1';

// Prediksi Controller
$route['prediksi-kecamatan'] = 'PrediksiController/kecamatan';
$route['prediksi-kelurahan'] = 'PrediksiController/kelurahan';
