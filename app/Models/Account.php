<?php

namespace App\Models;

use App\Models\Model;

class Account extends Model
{

    protected $table = 'ACCOUNT';
    protected $primaryKey = 'USERNAME';

    public function checkUser($table, $username, $password)
    {

        $sql = "SELECT * FROM {$table} WHERE
        USERNAME='{$username}' AND PASSWORD='{$password}'";
        return $this->rawQuery($sql);
    }

    public function login()
    {
        if (isset($_POST['login'])) {
            $table = 'ACCOUNT';
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $th = $this->checkUser($table, $username, $password);

            if (($th[0]->USERNAME == $username) && ($th[0]->PASSWORD == $password)) {
                if ((1 == $th[0]->ROLE) || (2 == $th[0]->ROLE)) {
                    $_SESSION['user'] = $th[0];
                    die(var_dump($_SESSION['user']));
                    // return redirect('users');
                }
            } else {
                // return redirect('');
            }
        }
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

            $checkId = $this->findById($user['USERNAME'], 'USERNAME');

            if (null != $checkId->USERNAME) {
                echo 'Username already!';
            } else {
                echo 'Register Successful!';
                $check = App::get('database')->insert('ACCOUNT', $user);
                $check = $this->insert;
                // return redirect('');
            }
        }
    }
}
