<?php

namespace App\Models;

use App\Models\Model;

class Shop_Type extends Model
{
    protected $table = 'TYPE_SHOP';
    public function add($shop, $type)
    {
        $sql = "INSERT INTO TYPE_SHOP(SHOP_ID,TYPE_ID) VALUES ({$shop},{$type})";
        return $this->rawQuery($sql);
    }

    public function update($shop, $type)
    {
        $sql = "UPDATE TYPE_SHOP SET TYPE_ID={$type} WHERE SHOP_ID={$shop}";
        return $this->rawQuery($sql);
    }
}
