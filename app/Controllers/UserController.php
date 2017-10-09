<?php

/**
 *
 */

namespace App\Controllers;

use app\Models\Account;
use Core\App;

class UserController
{

    public function index()
    {
        $users = (new Account)->selectAll();

        if (isset($_SESSION['user'])) {
            $users = (new Account)->selectAll();
            return view('user/index', ['users' => $users]);
        } else {

            return 'Ban khong duoc truy cap trang nay';
        }
    }

    public function add()
    {

        return view('user/add');
    }

    public function store()
    {
        (new Account)->addUser();
    }

    public function edit()
    {
        $Info_User = (new Account)->edit();
        //var_dump($Info_User[0]->USERNAME);
        return view('user/edit', compact('Info_User'));
    }

    public function update()
    {
        (new Account)->update();
    }

    public function del()
    {
        (new Account)->del();
        return redirect('user');
    }
}
