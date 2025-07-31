<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Frontend routes
$routes->get('/beneficiaries', 'Home::beneficiaries');
$routes->get('beneficiaries/load-more', 'Home::loadMoreBeneficiaries');
$routes->get('/success-stories', 'Home::successStories');

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

    // Public forms management
    $routes->get('public-forms', 'AdminPublicForms::index');
    $routes->get('public-forms/create', 'AdminPublicForms::create');
    $routes->post('public-forms/store', 'AdminPublicForms::store');
    $routes->get('public-forms/submissions/(:num)', 'AdminPublicForms::submissions/$1');
    $routes->get('public-forms/approve/(:num)', 'AdminPublicForms::approveSubmission/$1');
});

// Public form routes
$routes->get('public-form/(:alphanum)', 'PublicForm::index/$1');
$routes->post('public-form/(:alphanum)/submit', 'PublicForm::submit/$1');

// Image serving routes
$routes->get('uploads/beneficiaries/(:any)', function($filename) {
    $path = WRITEPATH . 'uploads/beneficiaries/' . $filename;
    if (file_exists($path)) {
        return response()->setHeader('Content-Type', mime_content_type($path))->setBody(file_get_contents($path));
    }
    throw new \CodeIgniter\Exceptions\PageNotFoundException('Image not found');
});

$routes->get('uploads/success_stories/(:any)', function($filename) {
    $path = WRITEPATH . 'uploads/success_stories/' . $filename;
    if (file_exists($path)) {
        return response()->setHeader('Content-Type', mime_content_type($path))->setBody(file_get_contents($path));
    }
    throw new \CodeIgniter\Exceptions\PageNotFoundException('Image not found');
});

$routes->get('uploads/public_submissions/(:any)', function($filename) {
    $path = WRITEPATH . 'uploads/public_submissions/' . $filename;
    if (file_exists($path)) {
        return response()->setHeader('Content-Type', mime_content_type($path))->setBody(file_get_contents($path));
    }
    throw new \CodeIgniter\Exceptions\PageNotFoundException('Image not found');
});