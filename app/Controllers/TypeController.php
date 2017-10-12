<?php

namespace App\Controllers;

use App\Models\Type;
use Core\App;

class TypeController
{
    protected $type;

    public function __construct()
    {
        $this->verify();
    }

    public function verify()
    {
        if (isset($_SESSION['user'])) {
            $this->type = new Type;
        } else {
            $link = '/login';
            return view('not-access', compact('link'));
        }
    }

    public function index()
    {
        $types = $this->type->selectAll();
        return view('type/index', compact('types'));
    }

    public function add()
    {
        return view('type/add');
    }

    public function addType()
    {
        $this->type->addType();
    }

    public function edit()
    {
        $type = $this->type->getType($_GET['TYPE_ID']);
        return view('type/edit', compact('type'));
    }

    public function editType()
    {
        $this->type->editType();
    }

    public function deleteType()
    {
        $this->type->deleteType($_GET['id']);
        redirect('admin/type');
    }
}
