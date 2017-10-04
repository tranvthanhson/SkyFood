<?php

namespace App\Controllers;

use app\Models\Account;

class LoginController
{
    public function index()
    {
        return view('login/index');
    }

    public function login()
    {
        Account::login();
    }
}
