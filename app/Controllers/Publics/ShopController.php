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
        $shop = $this->shop->selectByKeyPublic();
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

    public function ajaxRate()
    {
        if ($this->verify() == 0) {
            echo "<b style='color:red'>you don't login</b>";
        } else {
            $this->rate->addRate();
        }
    }

    public function ajaxUpdateRate()
    {
        $this->rate->updateRate();
    }
}
