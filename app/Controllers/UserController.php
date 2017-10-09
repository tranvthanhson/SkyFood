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

    public function addUser()
    {

        return view('user/add');
    }

    public function storeUser()
    {
        (new Account)->addUser();
    }

    public function editUser()
    {
        $infoUser = (new Account)->getUser($_GET['idUser']);

        return view('user/edit', compact('infoUser'));
    }

    public function updateUser()
    {
        (new Account)->update();
    }

    public function deleteUser()
    {
        (new Account)->delete();
        return redirect('user');
    }
}
