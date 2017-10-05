<?php
namespace App\Controllers;

use Core\App;

class PostController
{
    public function index()
    {
    	$post=App::get('database')->selectAll('SHOP');
    	return view('post/index',compact('post'));
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
