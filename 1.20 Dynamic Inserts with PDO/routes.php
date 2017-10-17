<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');
$router->get('usercreated', 'controllers/user-created.php');
$router->post('details', 'controllers/add-details.php');
