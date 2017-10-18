<?php

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $companyName = 'Nickdude';

        return view('about', compact('companyName'));
    }

    public function contact()
    {
        $contactDetails = [
            'phone' => '+316 12 345 678',
            'mail' => 'blabla@example.com'
        ];
        return view('contact', compact('contactDetails'));

    }

    public function userCreated()
    {
        $user = $_GET['name'];
        return view('user-created', compact('user'));
    }

    public function secret()
    {
        return view('secret');
    }

    public function page404()
    {
        return view('404');
    }
}
