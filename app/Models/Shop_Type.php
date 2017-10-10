<?php

namespace App\Models;

use App\Models\Model;

class Shop_Type extends Model
{
    protected $table = 'TYPE_SHOP';
    public function add($shop, $type)
    {
        $shopType['SHOP_ID'] = $shop;
        $shopType['TYPE_ID'] = $type;
        return $this->insert($shopType);
    }

    public function update($shop, $type)
    {
        $shopType['SHOP_ID'] = $shop;
        $shopType['TYPE_ID'] = $type;
        return $this->rawQuery($shopType['SHOP_ID']);
    }

    public function delete()
    {
        $sql = "DELETE  FROM {$this->table} WHERE SHOP_ID={$_GET['id']}";
        //die($sql);
        return $this->rawQuery($sql);
    }
}
