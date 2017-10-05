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
        (new Account)->addUser();

    }

    public function edit()
    {
        return view('user/edit');
    }

    public function del()
    {
        echo 'cc';
    }
}
