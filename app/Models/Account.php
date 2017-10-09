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
            'username' => $username,
            'password' => md5($password),
            'fisrtname' => $fisrtname,
            'lastname' => $lastname,
            'address' => $address,
            'image' => $image,
            'email' => $email,
            'fullname' => $lastname . ' ' . $fisrtname,
            'role' => $role,
            'phone' => $phone,
        ];
    }

    // $user = [];

    // $user['FIRST_NAME'] = $_POST['firstName'];
    // $user['LAST_NAME'] = $_POST['lastName'];
    // $user['ADDRESS'] = $_POST['address'];
    // $user['IMAGE'] = $_POST['url_img'];
    // $user['EMAIL'] = $_POST['email'];
    // $user['FULL_NAME'] = $user['LAST_NAME'] . ' ' . $user['FIRST_NAME'];
    // $user['ROLE'] = $_POST['role'];
    // $user['PHONE'] = $_POST['phone'];

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
                    //var_dump($_SESSION['user']);
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
        //echo $_POST['username'];
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
                //die(var_dump($user));
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
            SET FIRST_NAME ='{$this->fillable['fisrtname']}',
            LAST_NAME='{$this->fillable['lastname']}',
            PHONE='{$this->fillable['phone']}',
            EMAIL='{$this->fillable['email']}',
            ADDRESS='{$this->fillable['address']}',
            FULL_NAME='{$this->fillable['fulname']}',
            ROLE='{$this->fillable['role']}',
            IMAGE='{$this->fillable['image']}',
            PASSWORD='{$this->fillable['password']}'
            WHERE USERNAME='{$this->fillable['username']}'";
            echo $sql;
            $this->rawQuery($sql);
            echo 'Edit Successful!';
        }
    }
}
