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
        $detailUser = $this->account->detailUser();
        return view('public/user/index', compact('detailUser'));
    }

    public function editUser()
    {
        $this->account->updateUserInfo();
    }

    public function viewEditPassword()
    {
        $detailUser = $this->account->detailUser();
        return view('public/user/changePassword', compact('detailUser'));
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
