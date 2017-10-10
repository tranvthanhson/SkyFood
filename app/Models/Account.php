<?php

namespace App\Models;

use App\Models\Model;

class Account extends Model
{

    protected $table = 'ACCOUNT';
    protected $primaryKey = 'USERNAME';
    protected $fillable = [];

    public function setValue($password, $fisrtname, $lastname, $address, $image, $email, $role, $phone)
    {
        $this->fillable = [
            'PASSWORD' => md5($password),
            'FIRST_NAME' => $fisrtname,
            'LAST_NAME' => $lastname,
            'ADDRESS' => $address,
            'IMAGE' => $image,
            'EMAIL' => $email,
            'FULL_NAME' => $lastname . ' ' . $fisrtname,
            'ROLE' => $role,
            'PHONE' => $phone,
        ];
    }

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

            $user = $this->checkUser($this->table, $username, $password);

            if (($user[0]->USERNAME == $username) && ($user[0]->PASSWORD == $password)) {
                if (3 != $user[0]->ROLE) {
                    $_SESSION['user'] = $user[0];
                    return redirect('user');
                }
            } else {
                // return redirect('');
            }
        }
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            session_destroy();
        }
    }

    public function register()
    {
        if (isset($_POST['register'])) {
            $this->setValue($_POST['password'], $_POST['first_name'], $_POST['last_name'], '', '', $_POST['email'], 3, '');
            $checkId = $this->findById($_POST['username'], 'USERNAME');

            if (null != $checkId->USERNAME) {
                echo 'Username already!';
            } else {
                $this->fillable['USERNAME'] = $_POST['username'];
                $this->insert($this->fillable);
                $this->fillable = [];

                echo 'Register Successful!';
                // return redirect('');
            }
        }
    }

    public function addUser()
    {
        if (isset($_POST['add'])) {
            if (null == $_FILES['file']['name']) {
                $this->setValue($_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['address'], '', $_POST['email'], $_POST['role'], $_POST['phone']);

                $checkId = $this->findById($_POST['username'], 'USERNAME');
                //die('cc');
                //die(var_dump($checkId));
                if (null != $checkId->USERNAME) {
                    echo 'Username already!';
                } else {
                    $this->fillable['USERNAME'] = $_POST['username'];
                    $this->insert($this->fillable);
                    $this->fillable = [];
                    echo 'Register Successful!';
                }
            } else {

                // Upload img
                $image = $_FILES['file']['name'];
                $splitArray = explode('.', $image);
                $extention = end($splitArray);
                $image = 'hinh-' . time() . '.' . $extention;
                $tmpName = $_FILES['file']['tmp_name'];
                $pathUpload = $_SERVER['DOCUMENT_ROOT'] . '/public/assets/img/imagesUser/' . $image;
                move_uploaded_file($tmpName, $pathUpload);

                // Add user
                $this->setValue($_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['address'], $image, $_POST['email'], $_POST['role'], $_POST['phone']);
                $checkId = $this->findById($user['USERNAME'], 'USERNAME');

                if (null != $checkId->USERNAME) {
                    echo 'Username already!';
                } else {
                    $this->fillable['USERNAME'] = $_POST['username'];
                    $this->insert($this->fillable);
                    $this->fillable = [];
                    echo 'Register Successful!';
                }
            }
        }
    }

    // Delete User
    public function deleteUser()
    {
        return $this->deleteById($_GET['username']);
    }

    // Get User
    public function getUser($username)
    {
        $sql = "SELECT * FROM {$this->table} WHERE USERNAME='{$username}'";
        return $this->rawQuery($sql);
    }

    public function updateUser()
    {
        if (isset($_POST['add'])) {
            $account = $this->getUser($_POST['username']);
            if ('' == $_POST['password']) {
                $_POST['password'] = $account[0]->PASSWORD;
            }

            $image = $_FILES['file']['name'];

            if ($_POST['urlImage'] != $image) {
                $_POST['urlImage'] = $image;

                $splitArray = explode('.', $image);
                $extention = end($splitArray);
                $image = 'hinh-' . time() . '.' . $extention;
                $tmpName = $_FILES['file']['tmp_name'];
                $pathUpload = $_SERVER['DOCUMENT_ROOT'] . '/public/assets/img/imagesUser/' . $image;
                move_uploaded_file($tmpName, $pathUpload);
            }
            $this->setValue($_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['address'], $_POST['urlImage'], $_POST['email'], $_POST['role'], $_POST['phone']);
            $this->updateById($_POST['username'], $this->fillable);
            echo 'Edit Successful!';
        }
    }

    //SearchUser
    public function searchUser()
    {
        if (isset($_POST['ajaxKey'])) {
            $sql = "SELECT * FROM {$this->table} WHERE (USERNAME LIKE '%" . $_POST['ajaxKey'] . "%')";
            $users = [];
            $users['all'] = $this->rawQuery($sql);
            // $users['currentPage'] = $currentPage;
            // $users['totalPage'] = $totalPage;

            echo require 'app/views/user/UsersTable.view.php';
        } else {

            //     // Find sum record

            $sql = "SELECT count(USERNAME) as total from {$this->table}";

            $total = $this->rawQuery($sql);

            $totalRecords = $total[0]->total;

            //Find limit and current page
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 5;
            $totalPage = ceil($totalRecords / $limit);
            // Giới hạn currentPage trong khoảng 1 đến totalPage
            if ($currentPage > $totalPage) {
                $currentPage = $totalPage;
            } else if ($currentPage < 1) {
                $currentPage = 1;
            }

            //  Tìm Start
            $start = ($currentPage - 1) * $limit;
            $sql = "SELECT * from {$this->table} LIMIT {$start},{$limit}";
            $arrPagination = [];
            $arrPagination['all'] = $this->rawQuery($sql);
            $arrPagination['currentPage'] = $currentPage;
            $arrPagination['totalPage'] = $totalPage;

            return $arrPagination;
        }
    }
}
