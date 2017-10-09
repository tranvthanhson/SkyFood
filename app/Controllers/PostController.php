<?php
namespace App\Controllers;

use App\Models\Shop;
use App\Models\Shop_Type;
use App\Models\Type;

class PostController
{
    public function __construct()
    {
        $this->Shop = new Shop;
        $this->Shop_Type = new Shop_Type;
        $this->Type = new Type;
    }

    public function index()
    {
        $post = $this->Shop->ShopConnectToType();
        return view('post/index', compact('post'));
    }

    public function add()
    {
        $types = $this->Type->selectAll();
        return view('post/create', compact('types'));
    }

    public function addPost()
    {
        $this->Shop->insertShop();
        die('a');
        $shop = $this->Shop->selectKey();
        $shop = $shop[0]->MAX_ID;
        $type = $_POST['type'];
        $this->Shop_Type->add($shop, $type);
        return redirect('post');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $post = $this->Shop->selectByKey($id);
        $post = $post[0];
        $types = $this->Type->selectAll();
        //die(var_dump($post));
        return view('post/edit', compact('post', 'types'));
    }

    public function editPost()
    {
        $this->Shop->update();
        $this->Shop_Type->update($_GET['id'], $_GET['type']);
        return redirect('post');
    }

    public function del()
    {
        $this->Shop->delPost();
        return redirect('post');
    }
}
