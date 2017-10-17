<?php

namespace App\Controllers\Publics;

use App\Models\Home;
use Core\App;

class HomeController
{
    protected $home;

    public function __construct()
    {
        $this->home = new Home();
    }

    public function index()
    {
        $interestedShop = $this->home->interestedShop();
        $latest = $this->home->latestShop();
        // die(var_dump($interestedShop));
        return view('public/home/index', compact('interestedShop', 'latest'));
    }
}
