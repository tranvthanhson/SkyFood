<?php

namespace App\Controllers;

use Core\App;

class LoginController
{
    public function index()
    {
        return view('login/index');
    }

    public function login()
    {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            //die($username);
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
