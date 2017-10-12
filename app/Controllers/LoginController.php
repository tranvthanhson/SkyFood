<?php

namespace App\Controllers;

use App\Models\Account;
use Core\App;

class LoginController
{
    protected $account;

    public function __construct()
    {
        $this->account = new Account;
    }

    public function index()
    {
        return view('login/index');
    }

    public function login()
    {
        $result = $this->account->login();
        if ('Admin' == $result) {
            return redirect('admin/user');
        } else if ('User' == $result) {
            echo 'Redirect User Page';
        } else {
            echo 'Redirect Home';
        }
    }

    public function logout()
    {
        $this->account->logout();
        redirect('login');
    }

    public function viewForgotPassword()
    {
        return view('forgotpassword/index');
    }

    public function forgotPassword()
    {
        $this->account->forgotPassword();
    }
}
