<?php
namespace App\Controllers\Admin;

use Core\App;

class AdminController
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            return view('admin/index/index');
        } else {
            $link = '/login';
            return view('not-access', compact('link'));
        }
    }
}
