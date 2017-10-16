<?php

namespace App\Controllers\Publics;

use Core\App;

class HomeController
{
    public function index()
    {
        return view('public/home/index');
    }
}
