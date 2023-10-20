<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        // return view('home');
        // return view('login_frm');
        return view('main');
    }

    // -----------------------------------------------------------------------
    // login
    // -----------------------------------------------------------------------
    public function login()
    {
        $data = [];

        $data['validation_errors'] = session()->getFlashdata('validation_errors');

        return view('login_frm', $data);
    }

    public function login_submit()
    {
        // form validation
        $validation = $this->validate([
            'username' => [ // in the form name=username
                'label'  => 'Username',
                'rules'  => 'required|min_length[3]|max_length[20]',
                'errors' => [
                    'required'       => '{field} is required.',
                    'min_length[3]'  => '{field} must be at least {param} characters in length.',
                    'max_length[20]' => '{field} must not exceed {param} characters in length.',
                ]
            ],
            'password' => [ // in the form name=password
                'label'  => 'Password',
                'rules'  => 'required|min_length[6]|max_length[16]',
                'errors' => [
                    'required'       => '{field} is required.',
                    'min_length[3]'  => '{field} must be at least {param} characters in length.',
                    'max_length[20]' => '{field} must not exceed {param} characters in length.',
                ]
            ]
        ]);

        if (!$validation){
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        echo 'OK!';
    }

    public function logout()
    {
        echo 'Aqui logout!';
    }

    // -----------------------------------------------------------------------
    // new query
    // -----------------------------------------------------------------------
    public function new_query()
    {
        return view('new_query_frm');
    }

    public function new_query_submit()
    {
        echo 'Aqui new_query_submit!';
    }
}