<?php

namespace App\Models;

use App\Models\Model;

class Save extends Model
{
    protected $table = 'SAVE', $primaryKey = 'SAVE_ID';

    public function check()
    {
        $sql = "SELECT count({$this->primaryKey}) AS test FROM SAVE WHERE USERNAME={$_SESSION['user']->USERNAME}";
        return $this->rawQuery($sql);
    }
}
