<?php
namespace App\Controllers;

use App\Models\Shop;
use App\Models\Shop_Type;
use App\Models\Type;

class ShopController
{
    protected $shop, $shopType, $type;
    public function __construct()
    {
        $this->shop = new Shop;
        $this->shopType = new Shop_Type;
        $this->type = new Type;
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
        return redirect('shop');
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
        return redirect('shop');
    }

    public function delete()
    {
        $this->shop->deleteshop();
        $this->shopType->delete();
        return redirect('shop');
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
        return view('shop/comments');
    }
}
