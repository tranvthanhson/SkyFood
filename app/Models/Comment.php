<?php

namespace App\Models;

use App\Models\Model;

class Comment extends Model
{
    protected $table = 'COMMENT';
    protected $primaryKey = 'COMMENT_ID';

    public function load($id)
    {

        $link = 'admin/shop/comment';
        $sql = "SELECT * FROM {$this->table} WHERE SHOP_ID={$id}";
        //die($sql);
        $selectAll = $this->rawQuery($sql);
        //die(var_dump($selectAll));
        $countUser = count($selectAll);
        //die('a' . $countUser);
        return $this->pagination($sql, $countUser, $link, 1);
    }

    public function deleteComment()
    {
        $_SESSION['idshop'] = $_GET['id'];
        return $this->deleteById($_GET['idcomment']);
    }

    public function selectByShop($id)
    {
        $sql = "SELECT * FROM COMMENT INNER JOIN ACCOUNT ON COMMENT.USERNAME=ACCOUNT.USERNAME WHERE SHOP_ID={$id} ORDER BY COMMENT_ID DESC";
        return $this->rawQuery($sql);
    }

    public function ajaxComment()
    {
        $now = getdate();
        $currentDate = $now['year'] . '-' . $now['mon'] . '-' . $now['mday'] . ' ' . $now['hours'] . ':' . $now['minutes'] . ':' . $now['seconds'];
        $comment['USERNAME'] = $_SESSION['user']->USERNAME;
        $comment['SHOP_ID'] = $_POST['aid'];
        $comment['CONTENT'] = $_POST['avalue'];
        $comment['DATE_CREATED'] = $currentDate;
        $this->insert($comment);
        echo ' <div class="media">
        <div class="media-left">
        <img src="public/public/assets/img/user/' . $_SESSION['user']->IMAGE . '" class="media-object">
        </div>
        <div class="media-body">
        <h4 class="media-heading">' . $_SESSION['user']->USERNAME . ' <small><i>' . $currentDate . '</i></small></h4>
        <p>' . $_POST['avalue'] . '</p>
        </div>
        </div>';
    }
}
