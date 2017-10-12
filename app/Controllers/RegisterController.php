<?php

namespace App\Controllers;

use App\Models\Account;

class RegisterController
{
    protected $account;

    public function __construct()
    {
        $account = new Account;
    }

    public function index()
    {
        return view('register/index');
    }

    public function register()
    {
        $this->account->register();
    }
}
