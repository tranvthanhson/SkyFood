<?php

namespace App\Models;

use App\Models\Model;

class Comment extends Model
{
    protected $table = 'COMMENT';
    protected $primaryKey = 'COMMENT_ID';

    public function selectByShop()
    {
        return $this->pagination(1);
    }

    public function deleteComment()
    {
        return $this->deleteById($_GET['id']);
    }
}
