<?php
namespace App\Controllers;

use Core\App;

class PostController
{
    public function index()
    {
        return view('post/index');
    }

    public function add()
    {
        //echo 'cc';
        return view('post/create');
    }

    public function edit()
    {
        return view('post/edit');
    }
}
