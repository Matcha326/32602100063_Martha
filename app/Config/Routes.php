<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/halodunia', 'HelloWorld::halodunia');
$routes->post('/home/save', 'Home::save');
$routes->get('/form', 'FormController::submitForm');
$routes->get('/latihanview', 'HelloWorld::index');
$routes->get('/layouting', 'Layout::index');
$routes->get('/', 'pages::profile');
$routes->get('/skills', 'pages::profile');

//Crud
$routes->get('/crud', 'Crud::index');
$routes->get('/crud/tambah', 'Crud::tambah');
$routes->get('/crud/hapus', 'Crud::hapus');
$routes->get('/crud/edit', 'Crud::edit');

