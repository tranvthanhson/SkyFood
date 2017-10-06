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
                    var_dump($_SESSION['user']);
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
                $this->insert($user);

                echo 'Register Successful!';
                // return redirect('');
            }
        }
    }

    public function selectAll()
    {
        return $this->all();
    }

    public function addUser()
    {
        if (isset($_POST['add'])) {
            if (null == $_FILES['file']['name']) {
                $user = [];
                $user['USERNAME'] = $_POST['username'];
                $user['PASSWORD'] = md5($_POST['password']);
                $user['FIRST_NAME'] = $_POST['firstName'];
                $user['LAST_NAME'] = $_POST['lastName'];
                $user['ADDRESS'] = $_POST['address'];
                $user['EMAIL'] = $_POST['email'];
                $user['FULL_NAME'] = $user['LAST_NAME'] . ' ' . $user['FIRST_NAME'];
                $user['ROLE'] = $_POST['role'];
                $user['PHONE'] = $_POST['phone'];
                $checkId = $this->findById($user['USERNAME'], 'USERNAME');

                if (null != $checkId->USERNAME) {
                    echo 'Username already!';
                } else {
                    $this->insert($user);
                    echo 'Register Successful!';
                }
            } else {
                // Upload img

                $hinhanh = $_FILES['file']['name'];
                $arr_tach = explode('.', $hinhanh);
                $duoifile = end($arr_tach);
                $hinhanh = 'hinh-' . time() . '.' . $duoifile;
                $tmp_name = $_FILES['file']['tmp_name'];
                $path_upload = $_SERVER['DOCUMENT_ROOT'] . '/public/assets/img/imagesUser/' . $hinhanh;
                move_uploaded_file($tmp_name, $path_upload);

                // Add user

                $user = [];
                $user['USERNAME'] = $_POST['username'];
                $user['PASSWORD'] = md5($_POST['password']);
                $user['FIRST_NAME'] = $_POST['firstName'];
                $user['LAST_NAME'] = $_POST['lastName'];
                $user['ADDRESS'] = $_POST['address'];
                $user['IMAGE'] = $hinhanh;
                $user['EMAIL'] = $_POST['email'];
                $user['FULL_NAME'] = $user['LAST_NAME'] . ' ' . $user['FIRST_NAME'];
                $user['ROLE'] = $_POST['role'];
                $user['PHONE'] = $_POST['phone'];
                $checkId = $this->findById($user['USERNAME'], 'USERNAME');

                if (null != $checkId->USERNAME) {
                    echo 'Username already!';
                } else {
                    $this->insert($user);
                    echo 'Register Successful!';
                }
            }
        }
    }
}
