<?php

namespace App\Models;

use App\Models\Model;

class Feedback extends Model
{
    protected $table = 'FEEDBACK';
    protected $primaryKey = 'FEEDBACK_ID';

    public function selectAll()
    {
        return $this->all();
    }

}
