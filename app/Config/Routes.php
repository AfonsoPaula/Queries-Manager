<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');

// login/logout
$routes->get('/login', 'Main::login');
$routes->post('/login_submit', 'Main::login_submit');
$routes->get('/logout', 'Main::logout');

// new query
$routes->get('/new_query', 'Main::new_query');
$routes->post('/new_query_submit', 'Main::new_query_submit');

// edit query
$routes->get('/edit_query/(:alphanum)', 'Main::edit_query/$1');
$routes->post('/edit_query_submit', 'Main::edit_query_submit');

// delete query
$routes->get('/delete_query/(:alphanum)', 'Main::delete_query/$1');
$routes->get('/delete_query_confirm/(:alphanum)', 'Main::delete_query_confirm/$1');

// filter
$routes->get('/set_filter/(:alphanum)', 'Main::set_filter/$1');

//search
$routes->post('/search_submit', 'Main::search_submit');