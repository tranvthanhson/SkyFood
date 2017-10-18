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
        $rate['SHOP_ID'] = $_GET['id'];
        $rate['SCORE'] = $_POST['rate'];
        return $this->insert($rate);

    }

    public function updateRate()
    {

        $sql = "UPDATE RATE SET SCORE={$_POST['rate']}";
        return $this->rawQuery($sql);

    }
}
