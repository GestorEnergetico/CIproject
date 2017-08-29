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
|	https://codeigniter.com/user_guide/general/routing.html
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
// $route['default_controller'] = 'welcome';
// $route['translate_uri_dashes'] = FALSE;
// $route['(:any)'] = '$1';

/*    Basic routes    */
$route['default_controller'] = 'user';
$route['logout'] = 'user/user_logout';
/*    /Basic routes    */

/*    Settings routes    */
$route['settings/editions/new'] = 'settings/add_editions';
$route['settings/services/new'] = 'settings/add_services';
/*    /Settings routes    */

/*    Alumnos routes    */
$route['alumnos/(:num)'] = 'alumnos/profile/$1';
$route['alumnos/(:num)/edit'] = 'alumnos/edit_profile/$1';
/*    /Alumnos routes    */

/*    Profesores routes    */
$route['profesores/(:num)'] = 'profesores/profile/$1';
$route['profesores/(:num)/edit'] = 'profesores/edit_profile/$1';
/*    /Profesores routes    */

$route['aulas/(:num)'] = 'aulas/get_id/$1';
$route['aulas/(:num)/edit'] = 'aulas/get_id/$1';


$route['calendar/(:num)'] = 'calendar/get_id/$1';
$route['calendar/(:num)/edit'] = 'calendar/get_id/$1';

$route['404_override'] = 'my404'; 
// $route['404_override'] = '';
/*    Test routes    */


// $route['user/user_logout'] = '/logout';
// $route['settings/add_editions'] = '/settings/editions/new';


// $route['alumnos/(:num)'] = '/alumnos/$1';
// $route['aulas/(:num)'] = '/aulas/$1';
// $route['login'] = '/user/login';
// $route['/'] = 'main/dashboard';
// $route['alumnos'] = 'alumnos';
// $route['profesores'] = 'profesores';
// $route['profesores/(:num)'] = '/profesores/$1';
// $route['settings/add_editions'] = '/settings/editions/new';
// $route['settings/add_services'] = '/settings/services/new';








//
