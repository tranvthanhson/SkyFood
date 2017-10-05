<?php
namespace App\Controllers;

use Core\App;

class CategoryController
{
    public function index()
    {
        return view('category/index');
    }

    public function add()
    {
        return view('category/add');
    }

    public function edit()
    {
        return view('category/edit');
    }

}
