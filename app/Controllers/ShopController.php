<?php
namespace App\Controllers;

use App\Models\Comment;
use App\Models\Shop;
use App\Models\Shop_Type;
use App\Models\Type;

class ShopController
{
    protected $shop, $shopType, $type, $comment;

    public function __construct()
    {
        $this->verify();
    }

    public function verify()
    {
        if (isset($_SESSION['user'])) {
            $this->shop = new Shop;
            $this->shopType = new Shop_Type;
            $this->type = new Type;
            $this->comment = new Comment;
        } else {

            $link = '/admin/shop';
            return view('not-access', compact('link'));
        }
    }

    public function index()
    {
        $shop = $this->shop->shopConnectToType();
        return view('shop/index', compact('shop'));
    }

    public function add()
    {
        $types = $this->type->selectAll();
        return view('shop/create', compact('types'));
    }

    public function addPost()
    {
        $this->shop->insertShop();
        $shop = $this->shop->selectKey();
        $shop = $shop[0]->MAX_ID;
        $type = $_POST['type'];
        // die($type);
        $this->shopType->add($shop, $type);
        return redirect('admin/shop');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $shop = $this->shop->selectByKey($id);
        // die(var_dump($shop[0]));
        $shop = $shop[0];
        $types = $this->type->selectAll();
        //die(var_dump($shop));
        return view('shop/edit', compact('shop', 'types'));
    }

    public function editPost()
    {

        $this->shop->update();
        $this->shopType->update($_GET['id'], $_POST['type']);
        return redirect('admin/shop');
    }

    public function delete()
    {
        $this->shop->deleteshop();
        $this->shopType->delete();
        return redirect('admin/shop');
    }

    public function searchshop()
    {
        $this->shop->search();
    }

    public function ajaxDiscount()
    {
        $this->shop->updateDiscount();
    }

    public function loadComments()
    {
        $id = $_GET['id'];
        $comments = $this->comment->load();
        $shop = $this->shop->selectByKey($id);
        $shop = $shop[0];
        // die(var_dump($shop));
        return view('shop/comments', compact('comments', 'shop'));
    }

    public function deleteComment()
    {
        $this->comment->deleteComment();
        return redirect('admin/shop');
    }
}
