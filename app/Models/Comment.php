<?php

namespace App\Models;

use App\Models\Model;

class Comment extends Model
{
    protected $table = 'COMMENT';
    protected $primaryKey = 'COMMENT_ID';

    public function pagination()
    {
        $sql = "SELECT count($this->primaryKey) as total  FROM COMMENT  WHERE SHOP_ID = {$_GET['id']} ORDER BY {$this->primaryKey} DESC";
        //die($sql);
        $total = $this->rawQuery($sql);

        $totalRecords = $total[0]->total;

        //Find limit and current page
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 5;
        $totalPage = ceil($totalRecords / $limit);
        // Limit currentPage from 1 to totalPage
        if ($currentPage > $totalPage) {
            $currentPage = $totalPage;
        } else if ($currentPage < 1) {
            $currentPage = 1;
        }

        //  Find Start
        $start = ($currentPage - 1) * $limit;

        $sql = "SELECT * from {$this->table} ";
        $sql .= " LIMIT {$start},{$limit}";

        //die($sql);
        $arrPagination = [];
        $arrPagination['all'] = $this->rawQuery($sql);
        $arrPagination['currentPage'] = $currentPage;
        $arrPagination['totalPage'] = $totalPage;

        return $arrPagination;
    }

    public function deleteComment()
    {
        return $this->deleteById($_GET['id']);
    }
}
