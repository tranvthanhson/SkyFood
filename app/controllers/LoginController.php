<?php

namespace app\controllers;

use core\App;

class LoginController
{
    public function index()
    {
        return view('');
    }

    public function login()
    {
        if (isset($_POST['login'])) {
            extract($_POST);
            $password = md5($_POST['password']);

            $th = App::get('database')->testUser('ACCOUNT', $username, $password);

            if (($th[0]->USERNAME == $username) && ($th[0]->PASSWORD == $password)) {
                if ((1 == $th[0]->ROLE) || (2 == $th[0]->ROLE)) {
                    $_SESSION['user'] = $th[0];
                    //var_dump($_SESSION['user']);
                    return redirect('users');
                }
            } else {
                return redirect('');
            }
        }
    }
}
