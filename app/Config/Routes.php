<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Frontend routes
$routes->get('beneficiaries', 'Home::beneficiaries');
$routes->get('beneficiaries/load-more', 'Home::loadMoreBeneficiaries');
$routes->get('uploads/beneficiaries/(:any)', 'Home::serveBeneficiaryImage/$1');
$routes->get('success-stories', 'Home::success_stories');
$routes->get('ngo-works', 'Home::ngo_works');

// Admin routes
$routes->group('admin', function($routes) {
    $routes->get('/', 'Admin::index', ['filter' => 'auth']);
    $routes->get('login', 'Admin::login');
    $routes->post('authenticate', 'Admin::authenticate');
    $routes->get('logout', 'Admin::logout');

    // Beneficiaries management
    $routes->group('beneficiaries', ['filter' => 'auth'], function($routes) {
        $routes->get('/', 'AdminBeneficiaries::index');
        $routes->get('create', 'AdminBeneficiaries::create');
        $routes->post('store', 'AdminBeneficiaries::store');
        $routes->get('view/(:num)', 'AdminBeneficiaries::view/$1');
        $routes->get('edit/(:num)', 'AdminBeneficiaries::edit/$1');
        $routes->post('update/(:num)', 'AdminBeneficiaries::update/$1');
        $routes->get('delete/(:num)', 'AdminBeneficiaries::delete/$1');
        $routes->post('delete-multiple', 'AdminBeneficiaries::deleteMultiple');
        $routes->get('export-pdf', 'AdminBeneficiaries::exportPdf');
    });

    // NGO Works management
    $routes->get('ngo-works', 'AdminNgoWorks::index');
    $routes->get('ngo-works/create', 'AdminNgoWorks::create');
    $routes->post('ngo-works/store', 'AdminNgoWorks::store');
    $routes->get('ngo-works/edit/(:num)', 'AdminNgoWorks::edit/$1');
    $routes->post('ngo-works/update/(:num)', 'AdminNgoWorks::update/$1');
    $routes->get('ngo-works/delete/(:num)', 'AdminNgoWorks::delete/$1');
    $routes->get('ngo-works/view/(:num)', 'AdminNgoWorks::view/$1');

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

    // Admin Volunteering routes
    $routes->group('volunteering', ['filter' => 'auth'], static function ($routes) {
        $routes->get('/', 'AdminVolunteering::index');
        $routes->get('settings', 'AdminVolunteering::settings');
        $routes->post('settings', 'AdminVolunteering::settings');
        $routes->post('send-reminders', 'AdminVolunteering::sendReminders');
        $routes->get('view/(:num)', 'AdminVolunteering::viewSubmission/$1');
        $routes->post('update-status/(:num)', 'AdminVolunteering::updateStatus/$1');
        $routes->get('email-logs', 'AdminVolunteering::emailLogs');
    });
});

// Public form routes
$routes->get('public-form/(:alphanum)', 'PublicForm::index/$1');
$routes->post('public-form/(:alphanum)/submit', 'PublicForm::submit/$1');

// Public Volunteering Form
$routes->get('volunteering-form/(:num)', 'VolunteeringForm::form/$1');
$routes->post('volunteering-form/(:num)', 'VolunteeringForm::form/$1');

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

$routes->get('uploads/ngo_works/(:any)', function($filename) {
    $path = WRITEPATH . 'uploads/ngo_works/' . $filename;
    if (file_exists($path)) {
        return response()->setHeader('Content-Type', mime_content_type($path))->setBody(file_get_contents($path));
    }
    throw new \CodeIgniter\Exceptions\PageNotFoundException('Image not found');
});