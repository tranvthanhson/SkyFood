<?php

namespace App\Controllers;

use Core\App;

class RegisterController
{
    public function index()
    {
        return view('register/index');
    }

    public function register()
    {
        if (isset($_POST['register'])) {
            $user = [];
            $user['USERNAME'] = $_POST['username'];
            $user['PASSWORD'] = md5($_POST['password']);
            $user['FIRST_NAME'] = $_POST['first_name'];
            $user['LAST_NAME'] = $_POST['last_name'];
            $user['EMAIL'] = $_POST['email'];
            $user['FULL_NAME'] = $user['LAST_NAME'] . ' ' . $user['FIRST_NAME'];
            $user['ROLE'] = 3;
            $th = App::get('database')->testUserAlready('ACCOUNT', $user['USERNAME']);
            if (null != $th[0]) {
                echo 'Username already!';
            } else {
                $check = App::get('database')->insert('ACCOUNT', $user);
                if (isset($check)) {
                    echo 'cc';
                } else {
                    echo 'kk';
                }
            }
        }
    }
}
