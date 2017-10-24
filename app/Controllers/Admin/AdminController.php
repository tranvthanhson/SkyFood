<?php
namespace App\Controllers\Admin;

use App\Models\IndexAdmin;
use Core\App;

class AdminController
{
    protected $indexAdmin;

    public function __construct()
    {
        $this->verify();
    }

    public function verify()
    {
        if (isset($_SESSION['user'])) {
            $this->indexAdmin = new IndexAdmin;
        } else {
            $link = '/login';
            return view('not-access', compact('link'));
        }
    }

    public function index()
    {
        $indexAdmin = $this->indexAdmin->indexAdmin();
        $title = ['Bài đăng' => 'pencil', ''];
        die(var_dump($indexAdmin));
        return view('admin/index/index', compact('indexAdmin'));
    }
}
