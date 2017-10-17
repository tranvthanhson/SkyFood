<?php

namespace App\Models;

use App\Models\Model;

class Save extends Model
{
    protected $table = 'SAVE', $primaryKey = 'SAVE_ID';

    public function check()
    {
        $sql = "SELECT count(USERNAME) AS test FROM SAVE WHERE USERNAME='{$_SESSION['user']->USERNAME}'";
        //die($sql);
        return $this->rawQuery($sql);
    }

    public function addSave()
    {
        $save['USERNAME'] = $_SESSION['user']->USERNAME;
        $save['SHOP_ID'] = $_POST['aid'];
        $this->insert($save);
        echo "<b style='color:red'>saved</b>";
    }

    public function deletedSave()
    {
        $sql = "DELETE FROM SAVE WHERE USERNAME='{$_SESSION['user']->USERNAME}' AND SHOP_ID='{$_POST['aid']}'";
        $this->rawQuery($sql);
        echo 'unsaved';
    }
}
