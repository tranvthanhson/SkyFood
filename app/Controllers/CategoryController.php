<?php
namespace App\Controllers;

use Core\App;
use App\Models\Type;

class CategoryController
{   
    protected $category;
    public function __construct()
    {
        $this->verify();
    }

    public function verify()
    {
        if (isset($_SESSION['user'])) {
            $this->category = new Type;
        } else {
            echo 'Ban khong co quyen truy cap trang nay';
        }
    }
    public function index()
    {
        $categories = $this->category->selectAll();
        return view('category/index', compact('categories', 'abc'));
    }

    public function add()
    {
        return view('category/add');
    }
    public function storeCategory()
    {
        $this->category->addCategory();
    }
    
    public function edit()
    {
        return view('category/edit');
    }

}
