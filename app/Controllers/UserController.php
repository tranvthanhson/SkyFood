<?php

/**
 *
 */

namespace App\Controllers;

use Core\App;

class UserController
{

    public function index()
    {
        return view('user/index');
    }

    public function add()
    {
        return view('user/add');
    }

    public function edit()
    {
        return view('user/edit');
    }
}
