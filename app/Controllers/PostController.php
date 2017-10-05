<?php
namespace App\Controllers;

use Core\App;

class PostController
{
    public function index()
    {
    	$sql='SELECT *,TYPE.TYPE_NAME as tn FROM TYPE_SHOP INNER JOIN SHOP ON SHOP.SHOP_ID =TYPE_SHOP.SHOP_ID
    	INNER JOIN TYPE ON TYPE.TYPE_ID =TYPE_SHOP.TYPE_ID';
    	$post=App::get('database')->query($sql);
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
