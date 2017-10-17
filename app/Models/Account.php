<?php

namespace App\Models;

use App\Mailer\Mailer;
use App\Models\Model;

class Account extends Model
{

    protected $table = 'ACCOUNT';
    protected $primaryKey = 'USERNAME';
    protected $fillable = [];

    public function setValue($password, $fisrtname, $lastname, $address, $image, $email, $role, $phone)
    {
        $this->fillable = [
            'PASSWORD' => $password,
            'FIRST_NAME' => $fisrtname,
            'LAST_NAME' => $lastname,
            'ADDRESS' => $address,
            'IMAGE' => $image,
            'EMAIL' => $email,
            'FULL_NAME' => $lastname . ' ' . $fisrtname,
            'ROLE' => ('' == $role) ? 0 : $role,
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

            if ($user[0]->USERNAME == $username && $user[0]->PASSWORD == $password) {
                $_SESSION['user'] = $user[0];
                if (3 != $user[0]->ROLE) {
                    return 'Admin';
                } else {
                    return 'User';
                }
            }
        }
        return 'Fail';
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            session_destroy();
        }
    }

    public function register()
    {
        if (isset($_POST['add'])) {
            //die($_POST['first_name']);
            $this->setValue(md5($_POST['password']), $_POST['first_name'], $_POST['last_name'], '', '', '', 3, '');
            $checkId = $this->findById($_POST['username'], 'USERNAME');

            if (null != $checkId->USERNAME) {
                echo 'Username already!';
            } else {
                $this->fillable['USERNAME'] = $_POST['username'];
                $this->insert($this->fillable);
                $this->fillable = [];

                // echo 'Register Successful!';
                return redirect('');
            }
        }
    }

    public function addUser()
    {
        if (isset($_POST['add'])) {
            if (null == $_FILES['file']['name']) {
                $this->setValue(md5($_POST['password']), $_POST['firstName'], $_POST['lastName'], $_POST['address'], '', $_POST['email'], $_POST['role'], $_POST['phone']);

                $checkId = $this->findById($_POST['username'], 'USERNAME');
                if (null != $checkId->USERNAME) {
                    //echo 'Username already!';
                    $_SESSION['notice'] = 'Username đã tồn tại!';
                    redirect('admin/user/add');
                } else {
                    $this->fillable['USERNAME'] = $_POST['username'];
                    $this->insert($this->fillable);
                    $this->fillable = [];
                    $_SESSION['notice'] = 'Thêm Username thành công!';
                    redirect('admin/user');
                }
            } else {
                // Upload img
                $image = $this->uploadImages($_FILES['file']['name'], 'imagesUser');

                // Add user
                $this->setValue(md5($_POST['password']), $_POST['firstName'], $_POST['lastName'], $_POST['address'], $image, $_POST['email'], $_POST['role'], $_POST['phone']);
                $checkId = $this->findById($user['USERNAME'], 'USERNAME');

                if (null != $checkId->USERNAME) {
                    $_SESSION['notice'] = 'Username đã tồn tại!';
                    redirect('admin/user');
                } else {
                    $this->fillable['USERNAME'] = $_POST['username'];
                    $this->insert($this->fillable);
                    $this->fillable = [];
                    $_SESSION['notice'] = 'Thêm Username thành công!';
                    redirect('admin/user');
                }
            }
        }
    }

    // Delete User
    public function deleteUser()
    {
        $account = $this->getUser($_GET['username']);
        unlink('public/admin/assets/img/imagesUser/' . $account[0]->IMAGE);
        $_SESSION['notice'] = 'Deleted Successful!';
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
            } else {
                $_POST['password'] = md5($_POST['password']);
            }

            $image = $_FILES['file']['name'];

            if (null != $image) {
                unlink('public/admin/assets/img/imagesUser/' . $account[0]->IMAGE);
                $_POST['urlImage'] = $this->uploadImages($image, 'imagesUser');
            }
            if (1 != $account[0]->ROLE) {
                $_POST['role'] = $account[0]->ROLE;
            }

            $this->setValue($_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['address'], $_POST['urlImage'], $_POST['email'], $_POST['role'], $_POST['phone']);

            $this->updateById($_POST['username'], $this->fillable);
            $_SESSION['notice'] = 'Sửa Username thành công!';
            redirect('admin/user');
        }
    }

    // Search User
    public function searchUser()
    {
        if (isset($_POST['ajaxKey'])) {
            $sql = "SELECT * FROM {$this->table} WHERE (USERNAME LIKE '%" . $_POST['ajaxKey'] . "%')";
            $users = [];
            $users['all'] = $this->rawQuery($sql);
            // $users['currentPage'] = $currentPage;
            // $users['totalPage'] = $totalPage;

            echo require 'app/views/admin/user/UsersTable.view.php';
        } else {
            $link = 'admin/user';
            $sql = "SELECT * from {$this->table} ";
            $selectAll = $this->rawQuery($sql);
            // die(var_dump($selectAll));
            $countUser = count($selectAll);

            return $this->pagination($sql, $countUser, $link);
        }
    }

    public function forgotPassword()
    {
        if (isset($_POST['send'])) {
            $users = $this->findById($_POST['username'], '*');
            $newPassword = rand();

            $this->setValue(md5($newPassword), $users->FIRST_NAME, $users->LAST_NAME, $users->ADDRESS, $users->IMAGE, $users->EMAIL, $users->ROLE, $users->PHONE);
            $this->updateById($_POST['username'], $this->fillable);
            $this->mailer = new Mailer;
            $this->mailer->setEmailTo($users->EMAIL);
            $content = "Your new <strong>password</strong> is {$newPassword}";
            $this->mailer->setContent($content);
            $this->mailer->sendMail();
            redirect('login');
        }
    }

    public function checkUserAlready()
    {
        $key = $_POST['ajaxKey'];
        $sql = "SELECT USERNAME FROM {$this->table} WHERE USERNAME='$key'";
        $checkAlready = $this->rawQuery($sql);

        if ($checkAlready[0]->USERNAME == $key) {
            echo '<span style="color:#a94442;">Username đã tồn tại</span>';
        }
    }

    public function loadImages()
    {
        die(var_dump($_FILES));
    }

    // Public
    public function detailUser()
    {
        return $this->getUser($_SESSION['user']->USERNAME);
    }

    public function updateUserInfo()
    {
        if (isset($_POST['edit'])) {
            $account = $this->getUser($_SESSION['user']->USERNAME);
            $this->setValue($account[0]->PASSWORD, $_POST['firstName'], $_POST['lastName'], $_POST['address'], $account[0]->IMAGE, $_POST['email'], 3, $_POST['phone']);
            $this->updateById($_SESSION['user']->USERNAME, $this->fillable);
            $_SESSION['notice'] = 'Sửa Username thành công!';
            redirect('profile');
        }
    }

    public function editUserPassword()
    {
        if (isset($_POST['edit'])) {
            // die($_SESSION['user']->USERNAME);
            $account = $this->getUser($_SESSION['user']->USERNAME);
            $this->setValue(md5($_POST['password']), $account[0]->FIRST_NAME, $account[0]->LAST_NAME, $account[0]->ADDRESS, $account[0]->IMAGE, $account[0]->EMAIL, 3, $account[0]->PHONE);
            $this->updateById($_SESSION['user']->USERNAME, $this->fillable);
            $_SESSION['notice'] = 'Sửa Username thành công!';
            redirect('editUserPassword');
        }
    }

    public function editUserImage()
    {
        // Upload img
        if (isset($_POST['edit'])) {
            $account = $this->getUser($_SESSION['user']->USERNAME);
            unlink('public/admin/assets/img/imagesUser/' . $account[0]->IMAGE);
            $image = $this->uploadImages($_FILES['file']['name'], 'imagesUser');
            $_SESSION['user']->IMAGE = $image;
            $this->setValue($account[0]->PASSWORD, $account[0]->FIRST_NAME, $account[0]->LAST_NAME, $account[0]->ADDRESS, $image, $account[0]->EMAIL, 3, $account[0]->PHONE);

            $this->updateById($_SESSION['user']->USERNAME, $this->fillable);
            $_SESSION['notice'] = 'Sửa Username thành công!';
            redirect('profile');
        }
    }
}
