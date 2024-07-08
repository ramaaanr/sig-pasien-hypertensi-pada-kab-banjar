<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\RouteGroup;

/**
 * --------------------------------------------------------------------
 * Route Collections
 * --------------------------------------------------------------------
 *
 * Route collections group multiple routes under a common namespace
 * or other feature-specific grouping.
 *
 * Typically, this should be used for grouping API routes, or any
 * set of routes that share traits such as the same authentication
 * or authorization configuration.
 */

$routes = Services::routes();

/*
|--------------------------------------------------------------------------
| Route Groups
|--------------------------------------------------------------------------
|
| This is a sample route file to illustrate translating from CI3 routes
| to CI4 routes. Adjust as needed for your specific application.
|
*/

$routes->get('/', 'Home::index');
// DataMasyarakat controller routes
$routes->get('DataMasyarakat', 'DataMasyarakat::index');
$routes->get('DataMasyarakat/get_masyarakat', 'DataMasyarakat::get_masyarakat');
$routes->get('DataMasyarakat/showInputMasyarakat', 'DataMasyarakat::showInputMasyarakat');
$routes->post('DataMasyarakat/insert', 'DataMasyarakat::insert');
$routes->get('DataMasyarakat/remove_masyarakat/(:num)/(:num)/(:num)', 'DataMasyarakat::remove_masyarakat/$1/$2/$3');

// DataKecamatan controller routes
$routes->get('DataKecamatan', 'DataKecamatan::index');
$routes->get('DataKecamatan/get_kecamatan', 'DataKecamatan::get_kecamatan');
$routes->get('DataKecamatan/get_kecamatan_by_id/(:num)', 'DataKecamatan::get_kecamatan_by_id/$1');
$routes->get('DataKecamatan/edit_kecamatan', 'DataKecamatan::edit_kecamatan');
$routes->post('DataKecamatan/update', 'DataKecamatan::update');

// Data controller routes (if exists)
$routes->get('Data', 'Data::index');
$routes->get('Data/get_kecamatan', 'Data::get_kecamatan');
$routes->get('Data/get_kecamatan_by_id/(:num)', 'Data::get_kecamatan_by_id/$1');
$routes->post('Data/update', 'Data::update');

// User controller routes
$routes->get('User', 'User::index');
$routes->post('User/login', 'User::login');
$routes->get('User/logout', 'User::logout');


