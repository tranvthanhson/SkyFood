<?php

/**
 *
 */

namespace App\Controllers;

use app\Models\Account;
use Core\App;

class UserController
{

    public function index()
    {
        $users = (new Account)->selectAll();

        return view('user/index', ['users' => $users]);
    }

    public function add()
    {

        return view('user/add');
    }

    public function store()
    {
        $username = $_POST['username'];
        $role = $_POST['role'];
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmPass'];
        $firstName = $_POST['first-name'];
        $lastName = $_POST['lastName'];
        $address = $_POST['username'];
        $username = $_POST['username'];
    }

    public function edit()
    {
        return view('user/edit');
    }
}
