<?php

namespace App\Controllers;

use App\Models\Account;

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
}
