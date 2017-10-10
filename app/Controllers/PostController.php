<?php
namespace App\Controllers;

use App\Models\Shop;
use App\Models\Shop_Type;
use App\Models\Type;

class PostController
{
    public function __construct()
    {
        $this->shop = new Shop;
        $this->shopType = new Shop_Type;
        $this->type = new Type;
    }

    public function index()
    {
        $post = $this->shop->shopConnectToType();
        return view('post/index', compact('post'));
    }

    public function add()
    {
        $types = $this->type->selectAll();
        return view('post/create', compact('types'));
    }

    public function addPost()
    {
        $this->shop->insertShop();
        $shop = $this->shop->selectKey();
        $shop = $shop[0]->MAX_ID;
        $type = $_POST['type'];
        $this->shopType->add($shop, $type);
        return redirect('post');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $post = $this->shop->selectByKey($id);
        $post = $post[0];
        $types = $this->type->selectAll();
        //die(var_dump($post));
        return view('post/edit', compact('post', 'types'));
    }

    public function editPost()
    {
        $this->shop->update();
        $this->shopType->update($_GET['id'], $_GET['type']);
        return redirect('post');
    }

    public function delete()
    {
        $this->shop->deletePost();
        $this->shopType->delete();
        return redirect('post');
    }

    public function searchPost()
    {
        $this->shop->search();
    }
}
