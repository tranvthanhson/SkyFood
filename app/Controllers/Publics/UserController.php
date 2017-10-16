<?php

namespace App\Controllers\Publics;

use App\Models\Account;
use Core\App;

class UserController
{
    public function __construct()
    {
        $this->account = new Account();
    }

    public function index()
    {
        return view('public/user/index');
    }

    public function editUser()
    {
        $this->account->updateUserInfo();
    }

    public function viewEditPassword()
    {
        return view('public/user/changePassword');
    }

    public function editUserPassword()
    {
        $this->account->editUserPassword();
    }

    public function editUserImage()
    {
        $this->account->editUserImage();
    }
}
