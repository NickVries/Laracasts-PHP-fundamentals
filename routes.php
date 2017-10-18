<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('usercreated', 'user-created.php');
$router->post('details', 'add-details.php');
