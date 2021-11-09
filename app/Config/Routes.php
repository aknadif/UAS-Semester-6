<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Barang');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// CRUD RESTful Routes

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


$routes->get('/login/register', 'Register::index');
$routes->post('/login/register/process', 'Register::process');
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');

$routes->get('/', 'IndexController::index');

$routes->get('/karyawan', 'KaryawanController::index');
$routes->get('/karyawan/create', 'KaryawanController::create');
$routes->get('/karyawan/ubah/(:segment)', 'KaryawanController::ubah/$1');
$routes->get('/karyawan/kurang/(:segment)', 'KaryawanController::kurang/$1');
$routes->delete('/karyawan/(:num)', 'KaryawanController:delete/$1');
$routes->get('/karyawan/(:any)', 'KaryawanController::detail/$1');

	$routes->get('/barang', 'barang::index');
	$routes->get('/barang', 'login::level');
	$routes->get('/barang/create', 'barang::create');
	$routes->get('/barang/ubah/(:segment)', 'barang::ubah/$1');
	$routes->get('/barang/kurang/(:segment)', 'barang::kurang/$1');
	$routes->delete('/barang/(:num)', 'Barang:delete/$1');
	$routes->get('/barang/(:any)', 'Barang::detail/$1');






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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
