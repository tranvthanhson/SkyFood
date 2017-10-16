<?php

namespace App\Controllers\Publics;

use Core\App;

class UserController
{
    public function index()
    {
        return view('public/user/index');
    }
}
