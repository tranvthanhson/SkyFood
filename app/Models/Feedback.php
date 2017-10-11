<?php

namespace App\Models;

use App\Models\Model;

class Feedback extends Model
{
    protected $table = 'FEEDBACK';
    protected $primaryKey = 'FEEDBACK_ID';

    public function selectAll()
    {
        $sql = 'SELECT FEEDBACK_ID, FULL_NAME, EMAIL, PHONE, CONTENT FROM FEEDBACK A, ACCOUNT B
        WHERE A.USERNAME = B.USERNAME';
        return $this->rawQuery($sql);
    }

    public function deleteItem($id)
    {
        return $this->deleteById($id);
    }
}
