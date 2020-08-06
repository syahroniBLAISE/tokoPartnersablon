<?php namespace Config;

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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// ............................. Routing Untuk Toko
$routes->get('/toko', 'HomeToko::index');
$routes->get('/toko/tentang_kami', 'HomeToko::tentang_kami');
$routes->get('/toko/cara_belanja', 'HomeToko::cara_belanja');
$routes->get('/toko/order_sablon', 'HomeToko::order_sablon');
$routes->get('/toko/hubungi_kami', 'HomeToko::hubungi_kami');
$routes->get('/toko/keranjang', 'HomeToko::keranjang');
$routes->get('/toko/checkout', 'HomeToko::checkout');
// $routes->get('/toko/kategori', 'HomeToko::kategori');

// ............................. Routing Untuk Admin Toko
$routes->get('/adminToko', 'adminToko::index');
$routes->get('/adminToko/home', 'adminToko::home');
$routes->get('/adminToko/brand_edit/', 'adminToko::brand_edit');
$routes->get('/adminToko/brand_delete/', 'adminToko::brand_delete');
$routes->get('/adminToko/produk_simpan/', 'adminToko::produk_simpan');
$routes->get('/adminToko/produk_update/', 'adminToko::produk_update');
$routes->get('/adminToko/produk_delete/', 'adminToko::produk_delete');



// $routes->get('/adminToko/transaksi', 'adminToko::transaksi');

// $routes->get('/toko/hubungi_kami_kirim', 'HomeToko::hubungi_kami_kirim');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
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
