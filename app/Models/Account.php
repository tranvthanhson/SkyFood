<?php

namespace App\Models;

use Core\App;

class Account
{
    protected $table = 'ACCOUNT';
    protected $username, $password, $firstname, $lastname, $fullname, $email, $role;
    protected $db = 'database';

    public function checkUser($table, $username, $password)
    {
        $sql = "SELECT * FROM {$table} WHERE
        USERNAME='{$username}' AND PASSWORD='{$password}'";
        return App::get($this->db)->execute($sql);
    }

    public function login()
    {
        if (isset($_POST['login'])) {
            $table = 'ACCOUNT';
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $sql = "SELECT * FROM {$table} WHERE
            USERNAME='{$username}' AND PASSWORD='{$password}'";

            $th = $this->checkUser($table, $username, $password);

            if (($th[0]->USERNAME == $username) && ($th[0]->PASSWORD == $password)) {
                if ((1 == $th[0]->ROLE) || (2 == $th[0]->ROLE)) {
                    $_SESSION['user'] = $th[0];
                    // die(var_dump($_SESSION['user']));
                    return redirect('users');
                }
            } else {
                return redirect('');
            }
        }
    }
}
