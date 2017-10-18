<?php

$data = [
    'firstname' => $_POST['firstname'],
    'lastname'  => $_POST['lastname'],
    'gender'    => $_POST['gender'],
    'age'       => (int)$_POST['age'],
];

App::get('database')->insertInto('users', $data);

$url = "/usercreated?name=" . urlencode($data['firstname'] . ' ' . $data['lastname']);

header("Location: {$url}");
die();
