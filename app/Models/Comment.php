<?php

namespace App\Models;

use App\Models\Model;

class Comment extends Model
{
    protected $table = 'COMMENT';
    protected $primaryKey = 'COMMENT_ID';

    public function load()
    {

        $link = 'admin/shop';
        $sql = "SELECT * FROM {$this->table} WHERE SHOP_ID={$_GET['id']}";
        //die($sql);
        $selectAll = $this->rawQuery($sql);
        //die(var_dump($selectAll));
        $countUser = count($selectAll);

        return $this->pagination($sql, $countUser, $link, 1);
    }

    public function deleteComment()
    {
        return $this->deleteById($_GET['idcomment']);
    }
}
