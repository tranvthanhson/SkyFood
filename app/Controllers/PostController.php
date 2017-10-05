<?php
namespace App\Controllers;

use Core\App;

class PostController
{
    public function index()
    {
    	$sql='SELECT *,TYPE.TYPE_NAME as tn FROM TYPE_SHOP INNER JOIN SHOP ON SHOP.SHOP_ID =TYPE_SHOP.SHOP_ID
    	INNER JOIN TYPE ON TYPE.TYPE_ID =TYPE_SHOP.TYPE_ID';
    	$post=App::get('database')->query($sql);
    	return view('post/index',compact('post'));
    }

    public function add()
    {
        $sql="SELECT * FROM TYPE";
        $post=App::get('database')->query($sql);
        return view('post/create',compact('post'));
    }
    public function addPost(){
    	if (isset($_POST['them'])) {
            $user = [];
            $user['SHOP_NAME'] = $_POST['SHOPNAME'];
            $user['STATUS'] = $_POST['STATUS'];
            $user['DATE_CREATE'] = ;
            $user['DISCOUNT'] = $_POST['DISCOUNT'];
            $user['LAT'] = $_POST['LAT'];
            $user['LNG'] = $_POST['LNG'];
            $user['PHONE'] =$_POST['PHONE'];
            $user['TIME_CLOSE'] = $_POST['TIME_CLOSE'];
            $user['TIME_OPEN'] = $_POST['TIME_OPEN'];
            $user['VIEW'] = $_POST['STATUS'];
            $user['ADDRESS'] = $_POST['ADDRESS'];
            //die(var_dump($user));
            $th = App::get('database')->testUserAlready('ACCOUNT', $user['USERNAME']);
            if (null != $th[0]) {
                echo 'Username already!';
            } else {
                $check = App::get('database')->insert('ACCOUNT', $user);
                return redirect('');
            }
        }
    }
    public function edit()
    {
        return view('post/edit');
    }
}
