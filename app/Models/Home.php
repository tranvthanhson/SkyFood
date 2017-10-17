<?php

namespace App\Models;

use App\Models\Model;

class Home extends Model
{
    protected $tableShop = 'SHOP';
    protected $tableRate = 'RATE';
    public function interestedShop()
    {
        $sql = 'SELECT s.*,s.SHOP_ID,COUNT(c.COMMENT_ID) as SUM_COMMENT,AVG(r.SCORE) as AVG_RATE FROM RATE as r RIGHT JOIN SHOP as s on s.SHOP_ID=r.SHOP_ID LEFT JOIN COMMENT AS c ON c.SHOP_ID=s.SHOP_ID GROUP BY s.SHOP_ID HAVING (s.STATUS=1) ORDER BY r.SCORE DESC LIMIT 8 OFFSET 0';
        //die($sql);
        return $this->rawQuery($sql);
    }
}
