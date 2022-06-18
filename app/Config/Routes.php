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
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->resource('produk');
$routes->get('/admin', 'Admin::index', ['filter' => 'admin'] );
$routes->get('/agen', 'Agen::index', ['filter' => 'agen'] );

// Manage Produk Routes
$routes->get('/admin/produk', 'Admin::produk', ['filter' => 'admin'] );
$routes->get('/admin/tambah_produk', 'Admin::tambah_produk', ['filter' => 'admin'] );
$routes->post('/admin/store_new', 'Admin::store_new', ['filter' => 'admin'] );
$routes->get('/admin/edit_produk/(:num)', 'Admin::edit_produk/$1', ['filter' => 'admin'] );
$routes->post('/admin/do_update_produk/(:num)', 'Admin::do_update_produk/$1', ['filter' => 'admin'] );
$routes->get('/admin/hapus_produk/(:num)', 'Admin::hapus_produk/$1', ['filter' => 'admin'] );

// Manage Agen Routes
$routes->get('/admin/agen', 'Admin::agen', ['filter' => 'admin'] );
$routes->get('/admin/tambah_agen', 'Admin::tambah_agen', ['filter' => 'admin'] );
$routes->post('/admin/store_new_agen', 'Admin::store_new_agen', ['filter' => 'admin'] );
$routes->get('/admin/edit_agen/(:num)', 'Admin::edit_agen/$1', ['filter' => 'admin'] );
$routes->post('/admin/do_update_agen/(:num)', 'Admin::do_update_agen/$1', ['filter' => 'admin'] );
$routes->get('/admin/hapus_agen/(:num)', 'Admin::hapus_agen/$1', ['filter' => 'admin'] );

// Manage Chat Routes
$routes->get('/admin/pesan', 'Admin::pesan', ['filter' => 'admin'] );
$routes->get('/kontak', 'Kontak::index');
$routes->post('/kontak/submit', 'Kontak::submit');
$routes->get('/admin/hapus_kontak/(:num)', 'Admin::hapus_kontak/$1', ['filter' => 'admin'] );

// Manage SA Routes
$routes->get('/admin/super', 'Admin::super', ['filter' => 'admin'] );
$routes->get('/admin/sa_add', 'Admin::sa_add', ['filter' => 'admin'] );
$routes->post('/admin/sa_submit', 'Admin::sa_submit', ['filter' => 'admin'] );
$routes->get('/admin/edit_sa/(:num)', 'Admin::edit_sa/$1', ['filter' => 'admin'] );
$routes->post('/admin/do_update_sa/(:num)', 'Admin::do_update_sa/$1', ['filter' => 'admin'] );
$routes->get('/admin/hapus_sa/(:num)', 'Admin::hapus_sa/$1', ['filter' => 'admin'] );

// Manage API AUTH Routes
$routes->get('/admin/apis', 'Admin::apis', ['filter' => 'admin'] );
$routes->get('/admin/apis_add', 'Admin::apis_add', ['filter' => 'admin'] );
$routes->post('/admin/apis_submit', 'Admin::apis_submit', ['filter' => 'admin'] );
$routes->get('/admin/reset_apis/(:num)', 'Admin::reset_apis/$1', ['filter' => 'admin'] );
$routes->post('/admin/redo_apis/(:num)', 'Admin::redo_apis/$1', ['filter' => 'admin'] );
$routes->get('/admin/hapus_apis/(:num)', 'Admin::hapus_apis/$1', ['filter' => 'admin'] );


$routes->get('/login', 'Login::index', ['filter' => 'login'] );
$routes->get('/login_agen', 'Login_agen::index', ['filter' => 'login_agen'] );



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
