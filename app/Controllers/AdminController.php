<?php
namespace App\Controllers;

use Core\App;

class AdminController
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            return view('index/index');
        } else {
            $link = '/login';
            return view('not-access', compact('link'));
        }
    }
}
