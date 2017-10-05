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
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $th = $this->checkUser($this->table, $username, $password);

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

    public function selectAll()
    {
        //echo 'cc';
        $aaa = $this->all();
        //print_r($aaa);
        return $this->all();
    }
}
