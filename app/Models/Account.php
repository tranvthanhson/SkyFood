<?php

namespace App\Models;

use App\Models\Model;

class Account extends Model
{

    protected $table = 'ACCOUNT';
    protected $primaryKey = 'USERNAME';
    protected $fillable = [
        'fisrtname', 'lastname', 'address', 'image', 'email', 'fullname', 'role', 'phone',
    ];

    public function setValue($username, $password, $fisrtname, $lastname, $address, $image, $email, $role, $phone)
    {
        $this->fillable = [
            'USERNAME' => $username,
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

            $th = $this->checkUser($this->table, $username, $password);

            if (($th[0]->USERNAME == $username) && ($th[0]->PASSWORD == $password)) {
                if (3 != $th[0]->ROLE) {
                    $_SESSION['user'] = $th[0];
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
            $this->setValue($_POST['username'], $_POST['password'], $_POST['first_name'], $_POST['last_name'], '', '', $_POST['email'], 3, '');
            $checkId = $this->findById($_POST['username'], 'USERNAME');

            if (null != $checkId->USERNAME) {
                echo 'Username already!';
            } else {
                $this->insert($this->fillable);

                echo 'Register Successful!';
                // return redirect('');
            }
        }
    }

    public function selectAll()
    {

        // Find sum record

        $sql = "SELECT count(USERNAME) as total from {$this->table}";

        $total = $this->rawQuery($sql);

        $total_records = $total[0]->total;

        // FIND LIMIT VÀ CURRENT_PAGE

        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 5;

        // TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang

        $total_page = ceil($total_records / $limit);

        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page) {
            $current_page = $total_page;
        } else if ($current_page < 1) {
            $current_page = 1;
        }
        // Tìm Start
        $start = ($current_page - 1) * $limit;

        $sql1 = "SELECT * from {$this->table} LIMIT {$start},{$limit}";
        $ar_pagination = [];
        $ar_pagination['sql1'] = $this->rawQuery($sql1);
        $ar_pagination['current_page'] = $current_page;
        $ar_pagination['total_page'] = $total_page;
        return $ar_pagination;
    }

    public function addUser()
    {
        if (isset($_POST['add'])) {
            if (null == $_FILES['file']['name']) {
                $this->setValue($_POST['username'], $_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['address'], '', $_POST['email'], $_POST['role'], $_POST['phone']);
                $checkId = $this->findById($user['USERNAME'], 'USERNAME');

                if (null != $checkId->USERNAME) {
                    echo 'Username already!';
                } else {
                    $this->insert($this->fillable);
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

                $this->setValue($_POST['username'], $_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['address'], $hinhanh, $_POST['email'], $_POST['role'], $_POST['phone']);
                $checkId = $this->findById($user['USERNAME'], 'USERNAME');

                if (null != $checkId->USERNAME) {
                    echo 'Username already!';
                } else {
                    $this->insert($this->fillable);
                    echo 'Register Successful!';
                }
            }
        }
    }

    // Delete User

    public function delete()
    {
        return $this->deleteById($_GET['username']);
    }

    //Edit User

    public function getUser($username)
    {

        $sql = "SELECT * FROM {$this->table} WHERE USERNAME='{$username}'";
        return $this->rawQuery($sql);
    }

    public function update()
    {

        if (isset($_POST['add'])) {
            $account = $this->getUser($_POST['username']);
            if ('' == $_POST['password']) {
                $_POST['password'] = $account[0]->PASSWORD;
            }

            $image = $_FILES['file']['name'];
            if ($_POST['url_img'] != $image) {
                $_POST['url_img'] = $image;
            }
            $this->setValue($_POST['username'], $_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['address'], $_POST['url_img'], $_POST['email'], $_POST['role'], $_POST['phone']);
            $sql = "UPDATE {$this->table}
            SET FIRST_NAME ='{$this->fillable['FIRST_NAME']}',
            LAST_NAME='{$this->fillable['LAST_NAME']}',
            PHONE='{$this->fillable['PHONE']}',
            EMAIL='{$this->fillable['EMAIL']}',
            ADDRESS='{$this->fillable['ADDRESS']}',
            FULL_NAME='{$this->fillable['FULL_NAME']}',
            ROLE='{$this->fillable['ROLE']}',
            IMAGE='{$this->fillable['IMAGE']}',
            PASSWORD='{$this->fillable['PASSWORD']}'
            WHERE USERNAME='{$this->fillable['USERNAME']}'";
            echo $sql;
            $this->rawQuery($sql);
            echo 'Edit Successful!';
        }
    }
}
