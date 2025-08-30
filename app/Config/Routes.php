<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/en', 'Home::index/en');
$routes->get('/hi', 'Home::index/hi');
$routes->get('/en/students', 'Home::students/en');
$routes->get('/hi/students', 'Home::students/hi');
$routes->get('/en/success-stories', 'Home::success_stories/en');
$routes->get('/hi/success-stories', 'Home::success_stories/hi');
$routes->get('/en/activities', 'Home::activities/en');
$routes->get('/hi/activities', 'Home::activities/hi');

// Frontend routes
$routes->get('students', 'Home::students');
$routes->get('students/load-more', 'Home::loadMoreStudents');
$routes->get('uploads/students/(:any)', 'Home::serveStudentImage/$1');
$routes->get('success-stories', 'Home::successStories');
$routes->get('activities', 'Home::activities');

// Admin routes
$routes->group('admin', function($routes) {
    $routes->get('/', 'Admin::index', ['filter' => 'auth']);
    $routes->get('login', 'Admin::login');
    $routes->post('authenticate', 'Admin::authenticate');
    $routes->get('logout', 'Admin::logout');

    // Students management
    $routes->group('students', ['filter' => 'auth'], function($routes) {
        $routes->get('/', 'AdminStudents::index');
        $routes->get('create', 'AdminStudents::create');
        $routes->post('store', 'AdminStudents::store');
        $routes->get('view/(:num)', 'AdminStudents::view/$1');
        $routes->get('edit/(:num)', 'AdminStudents::edit/$1');
        $routes->post('update/(:num)', 'AdminStudents::update/$1');
        $routes->get('delete/(:num)', 'AdminStudents::delete/$1');
        $routes->post('delete-multiple', 'AdminStudents::deleteMultiple');
        $routes->get('export-pdf', 'AdminStudents::exportPdf');
    });

    // Activities management
    $routes->get('activities', 'AdminActivities::index');
    $routes->get('activities/create', 'AdminActivities::create');
    $routes->post('activities/store', 'AdminActivities::store');
    $routes->get('activities/edit/(:num)', 'AdminActivities::edit/$1');
    $routes->post('activities/update/(:num)', 'AdminActivities::update/$1');
    $routes->get('activities/delete/(:num)', 'AdminActivities::delete/$1');
    $routes->get('activities/view/(:num)', 'AdminActivities::view/$1');

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
$routes->get('uploads/students/(:any)', function($filename) {
    $path = WRITEPATH . 'uploads/students/' . $filename;
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

$routes->get('uploads/activities/(:any)', function($filename) {
    $path = WRITEPATH . 'uploads/activities/' . $filename;
    if (file_exists($path)) {
        return response()->setHeader('Content-Type', mime_content_type($path))->setBody(file_get_contents($path));
    }
    throw new \CodeIgniter\Exceptions\PageNotFoundException('Image not found');
});