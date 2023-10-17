<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');

// login/logout
$routes->get('login', 'Main::login'); // 'get' do login que há de ir para o main e para o login
$routes->post('login_submit', 'Main::login_submit');
$routes->get('logout', 'Main::logout');