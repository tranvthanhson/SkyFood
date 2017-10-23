<?php

namespace App\Models;

use App\Models\Model;

class Rate extends Model
{
    protected $table = 'RATE', $primaryKey = 'RATE_ID';
    public function check($id)
    {
        $sql = "SELECT count(USERNAME) AS test FROM RATE WHERE USERNAME='{$_SESSION['user']->USERNAME}' AND SHOP_ID={$id}";
        //die($sql);
        return $this->rawQuery($sql);
    }

    public function addRate()
    {

        $rate['USERNAME'] = $_SESSION['user']->USERNAME;
        $rate['SHOP_ID'] = $_POST['aid'];
        $rate['SCORE'] = $_POST['avalue'];
        $this->insert($rate);
        $sql = "SELECT AVG(SCORE) AS AVG FROM RATE  WHERE SHOP_ID={$_POST['aid']}";
        $avg = $this->rawQuery($sql);
        echo $avg[0]->AVG;

    }

    public function updateRate()
    {

        $sql = "UPDATE RATE SET SCORE={$_POST['avalue']} WHERE SHOP_ID={$_POST['aid']} AND USERNAME='{$_SESSION['user']->USERNAME}' ";
        //echo $sql;
        $this->rawQuery($sql);
        $sql = "SELECT AVG(SCORE) AS AVG FROM RATE  WHERE SHOP_ID={$_POST['aid']}";
        $avg = $this->rawQuery($sql);
        echo $avg[0]->AVG;

    }

}
