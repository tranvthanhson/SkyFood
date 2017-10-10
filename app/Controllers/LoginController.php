<?php

namespace App\Controllers;

use App\Models\Account;
use Core\App;

class LoginController
{
    public function index()
    {
        return view('login/index');
    }

    public function login()
    {
        (new Account)->login();
    }

    public function logout()
    {
        (new Account)->logout();
    }

    public function viewForgotPassword()
    {
        return view('forgotpassword/index');
    }

    public function forgotPassword()
    {
        $this->account = new Account;
        $this->account->forgotPassword();
    }
}
