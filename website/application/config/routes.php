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

//Basically it reffers to a static page

$route['default_controller'] = "Page/view";



$route['(:any)'] = "Page/view/$1";
$route['superadmin'] = '/superadmin/main_template';

// $route['signin-page'] = "Authenticate/index"; 
// $route['Authenticate'] = "Authenticate/index";
// $route['authenticate'] = "Authenticate/index";
// $route['Authenticate/(:any)'] = "Operation/getOrderListingPage";


// $route['reviews/(:any)'] = "Page/reviews/$1";
// $route['reviews/(:any)/(:any)'] = "Page/reviews/$1/$2";
// $route['reviews/(:any)/(:any)/(:any)'] = "Page/reviews/$1/$2/$3";
// $route['reviews/(:any)/(:any)/(:any)/(:any)'] = "Page/reviews/$1/$2/$3/$4";
// $route['reviews/(:any)/(:any)/(:any)/(:any)/(:any)'] = "Page/reviews/$1/$2/$3/$4/$5";

// $route['blogs/(:any)'] = "Page/blogs/$1";
// $route['blogs/(:any)/(:any)'] = "Page/blogs/$1/$2";
// $route['blogs/(:any)/(:any)/(:any)'] = "Page/blogs/$1/$2/$3";
// $route['blogs/(:any)/(:any)/(:any)/(:any)'] = "Page/blogs/$1/$2/$3/$4";
// $route['blogs/(:any)/(:any)/(:any)/(:any)/(:any)'] = "Page/blogs/$1/$2/$3/$4/$5";
// $route['blog/(:any)'] = "Page/blog/$1";


// $route['patient-visa/(:any)'] = "Page/patientVisa/$1";

// $route['author/(:any)'] = "Page/author/$1";


// $route['web/sitemap\.xml'] = "Sitemap";
// $route['web/crawl'] = "crawler";

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

