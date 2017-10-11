<?php

namespace App\Models;

use App\Models\Model;

class Comment extends Model
{
    protected $table = 'COMMENT';
    protected $primaryKey = 'COMMENT_ID';

    public function selectByShop()
    {
        $sql = "SELECT * FROM COMMENT WHERE SHOP_ID={$_GET['id']}";
        return $this->rawQuery($sql);
    }

    public function deleteComment()
    {
        return $this->deleteById($_GET['id']);
    }
}
