<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');

// login/logout
$routes->get('/login', 'Main::login'); // 'get' do login que há de ir para o main e para o login
$routes->post('/login_submit', 'Main::login_submit');
$routes->get('/logout', 'Main::logout');
$routes->get('/new_query', 'Main::new_query');
$routes->post('/new_query_submit', 'Main::new_query_submit');
$routes->get('/edit_query/(:alphanum)', 'Main::edit_query/$1');
$routes->post('/edit_query_submit', 'Main::edit_query_submit');