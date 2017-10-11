<?php

namespace App\Models;

use App\Models\Model;

class Shop extends Model
{
    protected $table = 'SHOP';
    protected $primaryKey = 'SHOP_ID';
    protected $fillable = [];
    public function setValue($SHOP_NAME, $STATUS, $DATE_CREATED, $DISCOUNT, $LAT, $LNG, $PHONE, $TIME_CLOSE, $TIME_OPEN, $VIEW, $ADDRESS, $DETAIL)
    {
        $this->fillable = [
            'SHOP_NAME' => $SHOP_NAME,
            'STATUS' => $STATUS,
            'DATE_CREATED' => $DATE_CREATED,
            'DISCOUNT' => $DISCOUNT,
            'LAT' => $LAT,
            'LNG' => $LNG,
            'PHONE' => $PHONE,
            'TIME_CLOSE' => $TIME_CLOSE,
            'TIME_OPEN' => $TIME_OPEN,
            'VIEW' => $VIEW,
            'ADDRESS' => $ADDRESS,
            'DETAIL' => $DETAIL,
        ];
    }

    public function shopConnectToType()
    {
        $sql = "SELECT count(SHOP_ID) as total from {$this->table}";

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

        $sql = "SELECT * FROM TYPE_SHOP INNER JOIN SHOP ON SHOP.SHOP_ID =TYPE_SHOP.SHOP_ID
        INNER JOIN TYPE ON TYPE.TYPE_ID =TYPE_SHOP.TYPE_ID ORDER BY SHOP.SHOP_ID DESC LIMIT {$start},{$limit}";
        $arrPagination = [];
        $arrPagination['all'] = $this->rawQuery($sql);
        $arrPagination['currentPage'] = $currentPage;
        $arrPagination['totalPage'] = $totalPage;

        return $arrPagination;
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
            // $shop['SHOP_NAME'] = $_POST['shop_name'];
            // $shop['STATUS'] = 0;
            // $shop['DATE_CREATED'] = $currentDate;
            // $shop['DISCOUNT'] = $_POST['discount'];
            // $shop['LAT'] = $_POST['lat'];
            // $shop['LNG'] = $_POST['lng'];
            // $shop['PHONE'] = $_POST['phone'];
            // $shop['TIME_CLOSE'] = $_POST['time_close'];
            // $shop['TIME_OPEN'] = $_POST['time_open'];
            // $shop['VIEW'] = $picture;
            // $shop['ADDRESS'] = $_POST['address'];
            // $shop['DETAIL'] = $_POST['detail'];
            $this->setValue($_POST['shop_name'], 0, $currentDate, $_POST['discount'], $_POST['lat'], $_POST['lng'], $_POST['phone'], $_POST['time_close'], $_POST['time_open'], $picture, $_POST['address'], $_POST['detail']);
            //die(var_dump($this->fillable));
            return $this->insert($this->fillable);
        }
    }

    public function selectKey()
    {
        $sql = 'SELECT MAX(SHOP_ID) AS MAX_ID FROM SHOP';
        return $this->rawQuery($sql);
    }

    public function selectByKey($key)
    {
        // die($key);
        $sql = "SELECT *,TYPE_SHOP.TYPE_ID AS tid,TYPE_SHOP.SHOP_ID AS sid FROM TYPE_SHOP INNER JOIN SHOP ON SHOP.SHOP_ID =TYPE_SHOP.SHOP_ID INNER JOIN TYPE ON TYPE.TYPE_ID =TYPE_SHOP.TYPE_ID  WHERE TYPE_SHOP.SHOP_ID = {$key}";
        // die($sql);
        return $this->rawQuery($sql);
    }

    public function update()
    {
        $id = $_GET['id'];
        $s = $this->findById($id, 'DATE_CREATED,VIEW');
        //die($date->DATE_CREATED);
        //$shop = $shop[0];
        if (isset($_POST['sua'])) {
            $shop = [];
            $picture = $s->VIEW;
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

            // $shop['SHOP_NAME'] = $_POST['shop_name'];

            // $shop['STATUS'] = 0;
            // $shop['DATE_CREATED'] = $s->DATE_CREATED;
            // $shop['DISCOUNT'] = $_POST['discount'];
            // $shop['LAT'] = $_POST['lat'];
            // $shop['LNG'] = $_POST['lng'];
            // $shop['PHONE'] = $_POST['phone'];
            // $shop['TIME_CLOSE'] = $_POST['time_close'];
            // $shop['TIME_OPEN'] = $_POST['time_open'];
            // $shop['VIEW'] = $picture;
            // $shop['ADDRESS'] = $_POST['address'];
            // $shop['DETAIL'] = $_POST['detail'];
            //die(var_dump($shop));
            $this->setValue($_POST['shop_name'], 0, $s->DATE_CREATED, $_POST['discount'], $_POST['lat'], $_POST['lng'], $_POST['phone'], $_POST['time_close'], $_POST['time_open'], $picture, $_POST['address'], $_POST['detail']);
            //die(var_dump($this->fillable));
            return $this->updateById($id, $this->fillable);
        }
    }

    public function deleteshop()
    {

        $path = $_SERVER['DOCUMENT_ROOT'];
        if ('default-avatar.png' != $picture) {
            $link = $path . '/public/assets/img/img-shop/' . $picture;
            unlink($link);
        } //die($_GET['id']);
        return $this->deleteById($_GET['id']);
    }

    public function search()
    {

        $sql = "SELECT * FROM {$this->table} WHERE (SHOP_NAME LIKE '%" . $_POST['ajaxKey'] . "%')";
        //die($sql);
        $shop = $this->rawQuery($sql);
        echo require 'app/views/shop/ShopTable.php';
    }

    public function updateDiscount()
    {

        $shop['DISCOUNT'] = $_POST['aValue'];
        // echo $shop['DISCOUNT'];
        $a = $this->updateById($_POST['aKey'], $shop);
        echo $_POST['aValue'];
    }
}
