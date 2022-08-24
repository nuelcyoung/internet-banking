<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setTranslateURIDashes(true);
$routes->set404Override(function(){
    $data['settings']='Page not found';
    return view('errors/404',$data);
});
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], 'login', 'AuthController::login', ["filter" => "noauth"]);
// Admin routes
$routes->group("admin", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "AdminController::index");
});
$routes->get('admin/register', 'AdminController::register');
$routes->post('admin/register', 'AdminController::register');
// Client routes
$routes->group("client", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "ClientController::index");
});
$routes->match(['get', 'post'], 'otp', 'AuthController::otp');
$routes->get('logout', 'AuthController::logout');
$routes->get('client/cards', 'Cards::index');
$routes->get('client/transfer', 'Transfer::index');
$routes->get('client/deposit', 'Deposit::index');
$routes->get('client/statement', 'Statement::index');
$routes->get('client/loan', 'Loan::index');
$routes->get('/contact', 'Home::contact');
$routes->get('/about', 'Home::about');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
