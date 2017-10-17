<?php

namespace App\Controllers\Publics;

use App\Models\Home;
use Core\App;

class HomeController
{
    public function index()
    {
        $this->home = new Home();
        $interestedShop = $this->home->interestedShop();
        $latest = $this->home->latestShop();
        // die(var_dump($interestedShop));
        return view('public/home/index', compact('interestedShop', 'latest'));
    }
}
