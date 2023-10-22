<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Main extends BaseController
{
    public function index()
    {
        return view('main');
    }

    // -----------------------------------------------------------------------
    // login
    // -----------------------------------------------------------------------
    public function login()
    {
        //check if login already
        if(session()->has('id')){
            return redirect()->to('/');
        }

        $data = [];

        $data['validation_errors'] = session()->getFlashdata('validation_errors');
        $data['login_error'] = session()->getFlashdata('login_error');

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

        //check user
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user_model = new UsersModel();
        $user = $user_model->where('username', $username)->first();

        if(!$user){
            return redirect()->back()->withInput()->with('login_error', 'Username or password is invalid.');
        }

        //check password
        if(!password_verify($password, $user->passwrd)){
            return redirect()->back()->withInput()->with('login_error', 'Username or password is invalid.');
        }

        // login ok
        session()->set('id', $user->id);
        session()->set('username', $user->username);

        return redirect()->to('/');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    // -----------------------------------------------------------------------
    // new query
    // -----------------------------------------------------------------------
    public function new_query()
    {
        // get form validation errors
        $data['validation_errors'] = session()->getFlashdata('validation_errors');

        return view('new_query_frm', $data);
    }

    public function new_query_submit()
    {
        // form validation
        $validation = $this->validate([
            'text_query_name'=>[
                'label'  => 'query name',
                'rules'  => 'required|min_length[3]|max_length[200]',
                'errors' => [
                    'required'       => '{field} is required.',
                    'min_length[3]'  => '{field} must be at least {param} characters in length.',
                    'max_length[20]' => '{field} must not exceed {param} characters in length.',
                ]
            ],
            'text_projeto' =>[
                'label'  => 'project',
                'rules'  => 'required|min_length[3]|max_length[200]',
                'errors' => [
                    'required'       => '{field} is required.',
                    'min_length[3]'  => '{field} must be at least {param} characters in length.',
                    'max_length[20]' => '{field} must not exceed {param} characters in length.',
                ]
            ],
            'text_tags'=>[
                'label'  => 'tags',
                'rules'  => 'required|min_length[3]|max_length[300]',
                'errors' => [
                    'required'       => '{field} is required.',
                    'min_length[3]'  => '{field} must be at least {param} characters in length.',
                    'max_length[20]' => '{field} must not exceed {param} characters in length.',
                ]
            ],
            'text_query'=>[
                'label'  => 'query',
                'rules'  => 'required|min_length[3]|max_length[3000]',
                'errors' => [
                    'required'       => '{field} is required.',
                    'min_length[3]'  => '{field} must be at least {param} characters in length.',
                    'max_length[20]' => '{field} must not exceed {param} characters in length.',
                ]
            ]
        ]);

        if(!$validation){
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }
    }
}