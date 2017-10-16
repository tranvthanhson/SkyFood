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
            return view('not-access');
        }
    }
}
