<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Frontend routes
$routes->get('/beneficiaries', 'Home::beneficiaries');
$routes->get('/success-stories', 'Home::success_stories');

// Admin routes
$routes->group('admin', function($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('login', 'Admin::login');
    $routes->post('authenticate', 'Admin::authenticate');
    $routes->get('logout', 'Admin::logout');
    
    // Beneficiaries management
    $routes->get('beneficiaries', 'AdminBeneficiaries::index');
    $routes->get('beneficiaries/create', 'AdminBeneficiaries::create');
    $routes->post('beneficiaries/store', 'AdminBeneficiaries::store');
    $routes->get('beneficiaries/edit/(:num)', 'AdminBeneficiaries::edit/$1');
    $routes->post('beneficiaries/update/(:num)', 'AdminBeneficiaries::update/$1');
    $routes->get('beneficiaries/delete/(:num)', 'AdminBeneficiaries::delete/$1');
    $routes->get('beneficiaries/view/(:num)', 'AdminBeneficiaries::view/$1');
    
    // Success stories management
    $routes->get('success-stories', 'AdminSuccessStories::index');
    $routes->get('success-stories/create', 'AdminSuccessStories::create');
    $routes->post('success-stories/store', 'AdminSuccessStories::store');
    $routes->get('success-stories/edit/(:num)', 'AdminSuccessStories::edit/$1');
    $routes->post('success-stories/update/(:num)', 'AdminSuccessStories::update/$1');
    $routes->get('success-stories/delete/(:num)', 'AdminSuccessStories::delete/$1');
});
