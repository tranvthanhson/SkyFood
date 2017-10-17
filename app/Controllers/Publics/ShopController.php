<?php

namespace App\Controllers\Publics;

use App\Models\Rate;
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
        $this->rate = new Rate;
    }

    public function index()
    {
        $id = $_GET['id'];
        if (isset($_SESSION['rate'])) {
            $id = $_SESSION['rate'];
            unset($_SESSION['rate']);
        }

        $shop = $this->shop->selectByKeyPublic($id);
        // die(var_dump($shop));
        $check = 0;
        $checkRate = '';
        if (isset($_SESSION['user'])) {
            $check = $this->save->check();
            $checkRate = $this->rate->check();
            //die(var_dump($check));
            if ($check[0]->test > 0) {
                $check = 1;
            } else {
                $check = 0;
            }
            if ($checkRate[0]->test > 0) {
                $checkRate = 1;
            } else {
                $checkRate = 0;
            }
        }

        return view('public/detail/index', compact('shop', 'check', 'checkRate'));
    }

    public function verify()
    {
        if (!isset($_SESSION['user'])) {
            return 0;
        }return 1;
    }

    public function ajaxSave()
    {
        if ($this->verify() == 0) {
            echo "<b style='color:red'>you don't login</b>";
        } else {
            $this->save->addSave();
        }
    }

    public function ajaxUnsave()
    {
        $this->save->deleteSave();
    }

    public function rate()
    {
        $_SESSION['rate'] = $_GET['id'];
        if ($this->verify() == 0) {
            return "<b style='color:red'>you don't<a href='/login'> login</a></b>";
        } else {
            $this->rate->addRate();
            return redirect('shop');
        }
    }

    public function updateRate()
    {
        $_SESSION['rate'] = $_GET['id'];
        $this->rate->updateRate();
        return redirect('shop');
    }
}
