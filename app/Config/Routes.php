<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Frontend\HomeController::index');
$routes->get('/contact', 'Frontend\HomeController::contact');
$routes->get('/about', 'Frontend\HomeController::about');
$routes->get('/projects', 'Frontend\HomeController::projects');
$routes->get('/services', to: 'Frontend\HomeController::services');
