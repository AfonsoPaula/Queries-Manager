<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        // return view('home');
        return view('login_frm');
    }

    // -----------------------------------------------------------------------
    // login
    // -----------------------------------------------------------------------
    public function login()
    {
        return view('login_frm');
    }

    public function login_submit()
    {
        echo 'Aqui!';
    }

    public function logout()
    {
        echo 'Aqui logout!';
    }
}