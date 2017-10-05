<?php

namespace App\Controllers;

use App\Models\Account;

class RegisterController
{

    public function index()
    {
        return view('register/index');
    }

    public function register()
    {
        (new Account)->register();
    }
}
