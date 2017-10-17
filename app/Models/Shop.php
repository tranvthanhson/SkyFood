<?php

namespace App\Models;

use App\Models\Model;

class Shop extends Model
{
    protected $table = 'SHOP';
    protected $primaryKey = 'SHOP_ID';
    protected $fillable = [];
    public function setValue($SHOP_NAME, $STATUS, $DATE_CREATED, $DISCOUNT, $LAT, $LNG, $PHONE, $TIME_CLOSE, $TIME_OPEN, $VIEW, $ADDRESS, $DETAIL, $USERNAME)
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
            'USERNAME' => $_SESSION['user']->USERNAME,
        ];
    }

    public function shopConnectToType()
    {
        $link = 'admin/shop';
        if (1 == $_SESSION['user']->ROLE) {
            $sql = 'SELECT *,TYPE_SHOP.TYPE_ID AS type_id,TYPE_SHOP.SHOP_ID AS shop_id, SHOP.SHOP_ID AS sid FROM TYPE_SHOP INNER JOIN SHOP ON SHOP.SHOP_ID =TYPE_SHOP.SHOP_ID INNER JOIN TYPE ON TYPE.TYPE_ID =TYPE_SHOP.TYPE_ID';
        } else {
            $sql = "SELECT *,TYPE_SHOP.TYPE_ID AS type_id,TYPE_SHOP.SHOP_ID AS shop_id, SHOP.SHOP_ID AS sid FROM TYPE_SHOP INNER JOIN SHOP ON SHOP.SHOP_ID =TYPE_SHOP.SHOP_ID INNER JOIN TYPE ON TYPE.TYPE_ID =TYPE_SHOP.TYPE_ID WHERE USERNAME={$_SESSION['user']->USERNAME}";
        }
        $selectAll = $this->rawQuery($sql);
        //die(var_dump($selectAll));
        $countUser = count($selectAll);

        return $this->pagination($sql, $countUser, $link, 1, 'sid');
    }

    public function selectAll()
    {
        return $this->all();
    }

    public function insertShop()
    {

        if (isset($_POST['add'])) {
            $shop = [];
            $now = getdate();
            $picture = 'default-avatar.png';
            //xu ly picture
            $file = $_FILES['file']['name'];
            if ('' != $file) {
                $picture = $this->uploadImages($file, 'img-shop');
            }
            $currentDate = $now['year'] . '-' . $now['mon'] . '-' . $now['mday'] . ' ' . $now['hours'] . ':' . $now['minutes'] . ':' . $now['seconds'];

            $this->setValue($_POST['shop_name'], 0, $currentDate, $_POST['discount'], $_POST['lat'], $_POST['lng'], $_POST['phone'], $_POST['time_close'], $_POST['time_open'], $picture, $_POST['address'], $_POST['detail']);
            //die(var_dump($this->fillable));
            return $this->insert($this->fillable);
        } //die('a');
    }

    public function selectKey()
    {
        $sql = 'SELECT MAX(SHOP_ID) AS MAX_ID FROM SHOP';
        //die($sql);
        return $this->rawQuery($sql);
    }

    public function selectByKey($key)
    {
        // die($key);
        $sql = "SELECT *,TYPE_SHOP.TYPE_ID AS type_id,TYPE_SHOP.SHOP_ID AS shop_id FROM TYPE_SHOP INNER JOIN SHOP ON SHOP.SHOP_ID =TYPE_SHOP.SHOP_ID INNER JOIN TYPE ON TYPE.TYPE_ID =TYPE_SHOP.TYPE_ID  WHERE TYPE_SHOP.SHOP_ID = {$key}";
        // die($sql);
        return $this->rawQuery($sql);
    }

    public function update()
    {
        $id = $_GET['id'];
        $result = $this->findById($id, 'DATE_CREATED,VIEW');
        $shop = [];
        $picture = $result->VIEW;
        $file = $_FILES['file']['name'];
        if ('' != $file) {
            // $path = $_SERVER['DOCUMENT_ROOT'];
            if ('default-avatar.png' != $picture) {
                $link = 'public/admin/assets/img/img-shop/' . $picture;
                unlink($link);
            }
            $picture = $this->uploadImages($file, 'img-shop');
        }
        if (isset($_POST['edit'])) {
            $choose = 0;
        } else if (isset($_POST['browsing'])) {
            $choose = 1;
        }
        die('tao van chay dc nha ahihi');
        $this->setValue($_POST['shop_name'], $choose, $result->DATE_CREATED, $_POST['discount'], $_POST['lat'], $_POST['lng'], $_POST['phone'], $_POST['time_close'], $_POST['time_open'], $picture, $_POST['address'], $_POST['detail']);
        return $this->updateById($id, $this->fillable);
    }

    public function deleteshop()
    {
        // $path = $_SERVER['DOCUMENT_ROOT'];
        if ('default-avatar.png' != $picture) {
            $link = 'public/admin/assets/img/img-shop/' . $picture;
            unlink($link);
        } //die($_GET['id']);
        return $this->deleteById($_GET['id']);
    }

    public function search()
    {
        $sql = "SELECT * FROM {$this->table} WHERE (SHOP_NAME LIKE '%" . $_POST['ajaxKey'] . "%')";
        //die($sql);
        $shop = $this->rawQuery($sql);
        echo require 'app/views/admin/shop/ShopTable.php';
    }

    public function updateDiscount()
    {
        $value = $_POST['aValue'];
        if ($val >= 100) {
            echo "<b style='color:red'>không hợp lệ</b>";
        } else {
            $shop['DISCOUNT'] = $value;
            //echo $shop['DISCOUNT'];
            $this->updateById($_POST['aKey'], $shop);
            echo $value;
        }
    }

    public function searchNameShop($name, $type, $sortBy)
    {
        $sql = "SELECT SHOP_NAME, VIEW, DISCOUNT, S.SHOP_ID,COUNT(C.COMMENT_ID) AS SUM_COMMENT,AVG(R.SCORE) AS AVG_RATE FROM
        RATE AS R RIGHT JOIN SHOP AS S ON S.SHOP_ID = R.SHOP_ID LEFT JOIN
        COMMENT AS C ON C.SHOP_ID = S.SHOP_ID
        LEFT JOIN TYPE_SHOP AS TS ON S.SHOP_ID=TS.SHOP_ID
        WHERE S.STATUS = 1 AND SHOP_NAME LIKE '%{$name}%'";

        if (0 != $type) {
            $sql .= " AND TS.TYPE_ID = {$type}";
        }
        if (0 == $sortBy) {
            $sql .= ' GROUP BY S.SHOP_ID ORDER BY S.SHOP_ID DESC';
        } else {
            $sql .= ' GROUP BY S.SHOP_ID ORDER BY AVG_RATE DESC';
        }

        // $sortBy = 0 -> NEWEST
        // $sortBy = 1 -> MOST RATE

        return $this->rawQuery($sql);
    }
}
