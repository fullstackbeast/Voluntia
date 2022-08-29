<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/admindashboard', 'Admin::dashboard');
$routes->post('/submitlogin', 'Auth::plogin');
$routes->get('/addvolunteer', 'Admin::addvolunteer');
$routes->post('/paddvolunteer', 'Admin::paddvolunteer');
$routes->get('/volunteers', 'Admin::volunteers');
$routes->get('/tasks', 'Task::tasks');
$routes->get('/editvolunteer/(:num)', 'Admin::editvolunteer/$1');
$routes->post('/peditvolunteer/(:num)', 'Admin::peditvolunteer/$1');
$routes->get('/addtask', 'Task::addtask');
$routes->post('/paddtask', 'Task::newtask');
$routes->get('/allvolunteers', 'Admin::getAllVolunteers');
$routes->get('/completetask', 'Task::completetask');
$routes->get('/completetask/(:num)', 'Task::completetask/$1');
$routes->get('/deletetask/(:num)', 'Task::deletetask/$1');
$routes->get('/edittask/(:num)', 'Task::edittask/$1');
$routes->post('/pedittask/(:num)', 'Task::pedittask/$1');

$routes->get('/', 'Home::index');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
