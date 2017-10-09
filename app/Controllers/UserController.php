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
        // $users = (new Account)->selectAll();

        // if (isset($_SESSION['user'])) {
        //     $users = (new Account)->selectAll();

        // } else {

        //     return 'Ban khong duoc truy cap trang nay';
        // }
        $users = (new Account)->searchUser();
        return view('user/index', ['users' => $users]);
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
        (new Account)->updateUser();
    }

    public function deleteUser()
    {
        (new Account)->deleteUser();
        return redirect('user');
    }

    public function searchUser()
    {

        (new Account)->searchUser();
    }
}
