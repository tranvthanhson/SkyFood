<?php
namespace App\Controllers;

use App\Models\Shop;
use App\Models\Shop_Type;
use App\Models\Type;

class PostController
{
    public function index()
    {
        $post = (new Shop)->ShopConnectToType();
        return view('post/index', compact('post'));
    }

    public function add()
    {
        $types = (new Type)->selectAll();
        return view('post/create', compact('types'));
    }

    public function addPost()
    {
        (new Shop)->insertShop();
        $shop = (new Shop)->selectKey($_POST['lat'], $_POST['lng']);
        $type = $_POST['type'];
        (new Shop_Type)->add($shop[0]->SHOP_ID, $type);
        return redirect('post');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $post = (new Shop)->selectByKey($id);
        $post = $post[0];
        $types = (new Type)->selectAll();
        //die(var_dump($post));
        return view('post/edit', compact('post', 'types'));
    }

    public function editPost()
    {
        (new Shop)->update();
        (new Shop_Type)->update($_GET['id'], $_GET['type']);
        return redirect('post');
    }

    public function del()
    {
        (new Shop)->delPost();
        return redirect('post');
    }
}
