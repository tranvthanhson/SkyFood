<?php

namespace App\Controllers\Publics;

use App\Models\Save;
use App\Models\Shop;
use Core\App;

class ShopController
{
    protected $shop;
    public function __construct()
    {
        $this->shop = new Shop;
        $this->save = new Save;
    }

    public function index()
    {
        $shop = $this->shop->selectByKeyPublic();
        // die(var_dump($shop));
        $check = 0;
        if (isset($_SESSION['user'])) {
            $check = $this->save->check();
            if ($check[0]->test > 0) {
                $check = 1;
            } else {
                $check = 0;
            }
        }

        return view('public/detail/index', compact('shop', 'check'));
    }

    public function verify()
    {
        if (!isset($_SESSION['user'])) {
            return 0;
        }
    }

    public function ajaxSave()
    {
        if ($this->verify() == 0) {
            echo "<b style='color:red'>bạn chưa đăng nhập</b>";
        } else {
            $this->save->addSave();
        }
    }
}
