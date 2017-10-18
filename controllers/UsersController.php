<?php

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    public function store()
    {
        $data = [
            'firstname' => $_POST['firstname'],
            'lastname'  => $_POST['lastname'],
            'gender'    => $_POST['gender'],
            'age'       => (int)$_POST['age'],
        ];

        App::get('database')->insertInto('users', $data);

//        $url = "/usercreated?name=" . urlencode($data['firstname'] . ' ' . $data['lastname']);
//
//        header("Location: {$url}");
        return redirect('users');
        die();
    }
}
