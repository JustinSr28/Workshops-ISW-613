<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Student::index');
$routes->get('students', 'Student::index');
$routes->get('students/create', 'Student::create');
$routes->post('students/store', 'Student::store');
$routes->get('students/delete/(:num)', 'Student::delete/$1');
$routes->get('students/edit/(:num)', 'Student::edit/$1');
$routes->post('students/update/(:num)', 'Student::update/$1');


//$routes->post('users/update/(:num)', 'Users::update/$1');

// $routes->get('users', 'Users::index');
// $routes->get('users/create', 'Users::create');
// $routes->post('users/store', 'Users::store');
// $routes->get('users/edit/(:num)', 'Users::edit/$1');

$routes->get('users/delete/(:num)', 'Users::delete/$1');

