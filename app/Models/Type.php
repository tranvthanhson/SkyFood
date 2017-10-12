<?php

namespace App\Models;

use App\Models\Model;

class Type extends Model
{
    protected $table = 'TYPE';
    protected $primaryKey = 'TYPE_ID';

    public function selectAll()
    {
        
        return $this->all();
    }

}
