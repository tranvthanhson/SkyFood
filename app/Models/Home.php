<?php

namespace App\Models;

use App\Models\Model;

class Home extends Model
{
    protected $tableShop = 'SHOP';
    protected $tableRate = 'RATE';
    public function interestedShop()
    {
        $sql = 'SELECT S.*,S.SHOP_ID, COUNT(C.COMMENT_ID) AS SUM_COMMENT,AVG(R.SCORE) AS AVG_RATE
        FROM RATE AS R RIGHT JOIN SHOP AS S ON S.SHOP_ID=R.SHOP_ID LEFT JOIN COMMENT AS C ON C.SHOP_ID=S.SHOP_ID
        GROUP BY S.SHOP_ID HAVING (S.STATUS=1) ORDER BY AVG_RATE DESC LIMIT 8 OFFSET 0';
        //die($sql);
        return $this->rawQuery($sql);
    }

    public function latestShop()
    {
        $sql = 'SELECT S.*,S.SHOP_ID,COUNT(C.COMMENT_ID) AS SUM_COMMENT,AVG(R.SCORE) AS AVG_RATE
        FROM RATE AS R RIGHT JOIN SHOP AS S ON S.SHOP_ID=r.SHOP_ID LEFT JOIN COMMENT AS C ON C.SHOP_ID=S.SHOP_ID
        GROUP BY S.SHOP_ID HAVING (S.STATUS=1) ORDER BY S.SHOP_ID DESC LIMIT 8 OFFSET 0';
        //die($sql);
        return $this->rawQuery($sql);
    }
}
