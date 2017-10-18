<?php

$router->get('', PagesController::class . '@home');
$router->get('about', PagesController::class . '@about');
$router->get('contact', PagesController::class . '@contact');
$router->get('usercreated', PagesController::class . '@userCreated');
$router->get('secret', PagesController::class . '@secret');
$router->get('404', PagesController::class . '@page404');

//$router->post('details', PagesController::class . '@addDetails');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
