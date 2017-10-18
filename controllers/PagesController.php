<?php

class PagesController
{
    public function home()
    {
        $users = App::get('database')->selectAll('users');

        require 'views/index.view.php';
    }

    public function about()
    {

    }

    public function contact()
    {
        $phone = '+316 12 345 678';
        $mail = 'blabla@gmail.com';

        require 'views/contact.view.php';

    }
}