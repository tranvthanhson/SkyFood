<?php

namespace App\Models;

use App\Models\Model;

class Shop extends Model
{
    protected $table = 'SHOP';
    protected $primaryKey = 'SHOP_ID';

    public function ShopConnectToType()
    {
        $sql = 'SELECT * FROM TYPE_SHOP INNER JOIN SHOP ON SHOP.SHOP_ID =TYPE_SHOP.SHOP_ID
    	INNER JOIN TYPE ON TYPE.TYPE_ID =TYPE_SHOP.TYPE_ID ORDER BY SHOP.SHOP_ID DESC';
        return $this->rawQuery($sql);
    }

    public function selectAll()
    {
        return $this->all();
    }

    public function insertShop()
    {

        if (isset($_POST['them'])) {
            $shop = [];
            $now = getdate();
            $picture = 'default-avatar.png';
            //xu ly picture
            $file = $_FILES['file']['name'];
            if ('' != $file) {
                $tmp = explode('.', $file);
                $duoiFile = end($tmp);
                $tenFileMoi = 'avt-' . time() . '.' . $duoiFile;
                $picture = $tenFileMoi;
                $tmp_name = $_FILES['file']['tmp_name'];
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path_upload = $path . '/public/assets/img/img-shop/' . $tenFileMoi;
                move_uploaded_file($tmp_name, $path_upload);
            }
            $currentDate = $now['year'] . '-' . $now['mon'] . '-' . $now['mday'] . ' ' . $now['hours'] . ':' . $now['minutes'] . ':' . $now['seconds'];
            $shop['SHOP_NAME'] = $_POST['shop_name'];
            $shop['STATUS'] = 0;
            $shop['DATE_CREATED'] = $currentDate;
            $shop['DISCOUNT'] = $_POST['discount'];
            $shop['LAT'] = $_POST['lat'];
            $shop['LNG'] = $_POST['lng'];
            $shop['PHONE'] = $_POST['phone'];
            $shop['TIME_CLOSE'] = $_POST['time_close'];
            $shop['TIME_OPEN'] = $_POST['time_open'];
            $shop['VIEW'] = $picture;
            $shop['ADDRESS'] = $_POST['address'];
            $shop['DETAIL'] = $_POST['detail'];
            return $this->insert($shop);
        }
    }

    public function selectKey()
    {
        $sql = 'SELECT MAX(SHOP_ID) AS MAX_ID FROM SHOP';
        return $this->rawQuery($sql);
    }

    public function selectByKey($key)
    {
        $sql = "SELECT *,TYPE.TYPE_ID as tid,TYPE_SHOP.TYPE_ID as tsid FROM TYPE_SHOP INNER JOIN SHOP ON SHOP.SHOP_ID =TYPE_SHOP.SHOP_ID INNER JOIN TYPE ON TYPE.TYPE_ID = TYPE_SHOP.TYPE_ID WHERE TYPE_SHOP.SHOP_ID={$key}";
        return $this->rawQuery($sql);
        //die($sql);
        // $a = $this->findById($key);
        // die(var_dump($a));
    }

    public function update()
    {
        $id = $_GET['id'];
        $post = $this->selectByKey($id);
        $post = $post[0];
        if (isset($_POST['sua'])) {
            $shop = [];
            $picture = $post->VIEW;
            //xu ly picture
            $file = $_FILES['file']['name'];
            if ('' != $file) {
                $path = $_SERVER['DOCUMENT_ROOT'];
                if ('default-avatar.png' != $picture) {
                    $link = $path . '/public/assets/img/img-shop/' . $picture;
                    unlink($link);
                }
                $tmp = explode('.', $file);
                $duoiFile = end($tmp);
                $tenFileMoi = 'avt-' . time() . '.' . $duoiFile;
                $picture = $tenFileMoi;
                $tmp_name = $_FILES['file']['tmp_name'];
                $path_upload = $path . '/public/assets/img/img-shop/' . $tenFileMoi;
                move_uploaded_file($tmp_name, $path_upload);
            }

            $shop['SHOP_NAME'] = $_POST['shop_name'];
            $shop['STATUS'] = 0;
            $shop['DATE_CREATED'] = $post->DATE_CREATED;
            $shop['DISCOUNT'] = $_POST['discount'];
            $shop['LAT'] = $_POST['lat'];
            $shop['LNG'] = $_POST['lng'];
            $shop['PHONE'] = $_POST['phone'];
            $shop['TIME_CLOSE'] = $_POST['time_close'];
            $shop['TIME_OPEN'] = $_POST['time_open'];
            $shop['VIEW'] = $picture;
            $shop['ADDRESS'] = $_POST['address'];
            $shop['DETAIL'] = $_POST['detail'];
            $sql = "UPDATE SHOP SET SHOP_NAME='{$shop['SHOP_NAME']}',LAT='{$shop['LAT']}',LNG='{$shop['LNG']}',DATE_CREATED='{$shop['DATE_CREATED']}',PHONE='{$shop['PHONE']}',TIME_OPEN='{$shop['TIME_OPEN']}',TIME_CLOSE='{$shop['TIME_CLOSE']}',STATUS='{$shop['STATUS']}',DISCOUNT={$shop['DISCOUNT']},VIEW='{$shop['VIEW']}',ADDRESS='{$shop['ADDRESS']}',DETAIL='{$shop['DETAIL']}' WHERE SHOP_ID={$id}";
            return $this->rawQuery($sql);
        }
    }

    public function delPost()
    {

        $path = $_SERVER['DOCUMENT_ROOT'];
        if ('default-avatar.png' != $picture) {
            $link = $path . '/public/assets/img/img-shop/' . $picture;
            unlink($link);
        } //die($_GET['id']);
        return $this->deleteById($_GET['id']);
    }
}
