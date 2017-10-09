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
                $this->insert($this->fillable);

                // echo 'Register Successful!';
                // return redirect('');
            }
        }
    }

    public function selectAll()
    {
        $sql = "SELECT * from {$this->table}";
        return $this->rawQuery($sql);
        // Find sum record

        //         $sql = "SELECT count(USERNAME) as total from {$this->table}";

//         $total = $this->rawQuery($sql);

//         $totalRecords = $total[0]->total;

        // Find limit and current page
        //         $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        //         $limit = 5;
        //         $totalPage = ceil($totalRecords / $limit);
        // Giới hạn currentPage trong khoảng 1 đến totalPage
        //         if ($currentPage > $totalPage) {
        //             $currentPage = $totalPage;
        //         } else if ($currentPage < 1) {
        //             $currentPage = 1;
        //         }

        // Tìm Start
        //         $start = ($currentPage - 1) * $limit;
        //         $sql = "SELECT * from {$this->table} LIMIT {$start},{$limit}";
        //         $arrPagination = [];
        //         $arrPagination['all'] = $this->rawQuery($sql);
        //         $arrPagination['currentPage'] = $currentPage;
        //         $arrPagination['totalPage'] = $totalPage;
        //         return $arrPagination;
    }

    public function addUser()
    {
        if (isset($_POST['add'])) {
            if (null == $_FILES['file']['name']) {
                $this->setValue($_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['address'], '', $_POST['email'], $_POST['role'], $_POST['phone']);
                $checkId = $this->findById($_POST['USERNAME'], 'USERNAME');

                if (null != $checkId->USERNAME) {
                    echo 'Username already!';
                } else {
                    $this->insert($this->fillable);
                    echo 'Register Successful!';
                }
            } else {

                // Upload img
                $image = $_FILES['file']['name'];
                $splitArray = explode('.', $image);
                $extention = end($splitArray);
                $image = 'hinh-' . time() . '.' . $extention;
                $tmpName = $_FILES['file']['tmpName'];
                $pathUpload = $_SERVER['DOCUMENT_ROOT'] . '/public/assets/img/imagesUser/' . $image;
                move_uploaded_file($tmpName, $pathUpload);

                // Add user
                $this->setValue($_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['address'], $image, $_POST['email'], $_POST['role'], $_POST['phone']);
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
            }
            $this->setValue($_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['address'], $_POST['urlImage'], $_POST['email'], $_POST['role'], $_POST['phone']);
            $this->updateById($_POST['username'], $this->fillable);
            echo 'Edit Successful!';
        }
    }

    //SearchUser
    public function searchUser()
    {
        $sql = "SELECT * FROM {$this->table} WHERE (USERNAME LIKE '%" . $_POST['ajaxKey'] . "%')";
        $users = $this->rawQuery($sql);
        echo ' <thead>
        <th>#</th>
        <th>User name</th>
        <th>Avatar</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Role</th>
        <th>Control</th>
    </thead>
    <tbody>';
        $i = 1;
        foreach ($users as $user):

            echo '<tr>
		        <td>' . $i . '</td>
		        <td class="username"><a href="">' . $user->USERNAME . '</a></td>
		        <td class="img-post">
		            <a href=""><img  src="/public/assets/img/imagesUser/' . $user->IMAGE . '" /></a>
		        </td>
		        <td>' . $user->FULL_NAME . '</td>
		        <td>' . $user->EMAIL . '</td>
		        <td>' . $user->ADDRESS . '</td>
		        <td>' . $user->PHONE . '</td>
		        <td>' . $user->ROLE . '</td>
		        <td class="control">
		            <div class="form-group">
		                <div class="item-col">
		                    <a href="/user/edit?idUser=' . $user->USERNAME . '" class="btn btn-success" title="Sửa">
		                        <i class="pe-7s-note"></i>
		                    </a>
		                </div>
		                <div class="item-col">
		                    <a data-toggle="modal" data-target="#delUser' . $user->USERNAME . '" href="" class="btn btn-danger" title="Xoá">
		                        <i class="pe-7s-trash"></i>
		                    </a>
		                </div>
		                <div class="clearfix"></div>
		            </div>
		        </td>
		    </tr>';
            $i++;

            echo "view_include('partials . modal', ['id_model' => 'delUser' . $user->USERNAME, 'title' => 'XÓANGƯỜIDÙNG', 'content' => 'Bạncóchắcchắnmuốnxóakhông ?? ', 'bt' => 'Xóa', 'link' => 'user / del ? username = ' . $user->USERNAME])";

        endforeach;

        echo '</tbody>';
    }
}
