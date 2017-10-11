<?php

namespace App\Models;

use App\Models\Model;

class Comment extends Model
{
    protected $table = 'COMMENT';
    protected $primaryKey = 'COMMENT_ID';

    public function selectByShop()
    {
        $sql = "SELECT count(COMMENT_ID) as total FROM COMMENT WHERE SHOP_ID={$_GET['id']}";
        //die($sql);
        $total = $this->rawQuery($sql);
        //die(var_dump($total));
        $totalRecords = $total[0]->total;

        //Find limit and current page
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 5;
        $totalPage = ceil($totalRecords / $limit);
        // Giới hạn currentPage trong khoảng 1 đến totalPage
        if ($currentPage > $totalPage) {
            $currentPage = $totalPage;
        } else if ($currentPage < 1) {
            $currentPage = 1;
        }
        //die('.aaa' . $currentPage);
        //  Tìm Start
        $start = ($currentPage - 1) * $limit;

        $sql = "SELECT * FROM COMMENT WHERE SHOP_ID={$_GET['id']} ORDER BY COMMENT_ID DESC LIMIT {$start},{$limit}";
        //die($currentPage);
        $arrPagination = [];
        $arrPagination['all'] = $this->rawQuery($sql);
        $arrPagination['currentPage'] = $currentPage;
        $arrPagination['totalPage'] = $totalPage;
        // die(var_dump($arrPagination));
        return $arrPagination;
    }

    public function deleteComment()
    {
        return $this->deleteById($_GET['id']);
    }
}
