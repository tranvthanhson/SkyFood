<?php

namespace App\Controllers;

use app\Models\Account;
use Core\App;

class UserController
{
    protected $account;

    public function __construct()
    {
        $this->verify();
    }

    public function verify()
    {
        if (isset($_SESSION['user'])) {
            $this->account = new Account;
        } else {
            $link = '/login';
            return view('not-access', compact('link'));
        }
    }

    public function index()
    {
        $users = $this->account->searchUser();
        return view('user/index', ['users' => $users]);
    }

    public function addUser()
    {
        if (isset($_SESSION['user'])) {
            return view('user/add');
        } else {
            echo 'Ban khong co quyen truy cap trang nay';
        }
    }

    public function storeUser()
    {
        $this->account->addUser();
    }

    public function editUser()
    {
        $infoUser = $this->account->getUser($_GET['idUser']);

        return view('user/edit', compact('infoUser'));
    }

    public function updateUser()
    {
        $this->account->updateUser();
    }

    public function deleteUser()
    {
        $this->account->deleteUser();
        return redirect('admin/user');
    }

    public function searchUser()
    {
        $this->account->searchUser();
    }

    public function checkUser()
    {
        $this->account->checkUserAlready();
    }

    public function loadImages()
    {
        $this->account->loadImages();
    }
}
