<?php

namespace App\Models;

use App\Models\Model;

class Type extends Model
{
    protected $table = 'TYPE';
    protected $primaryKey = 'TYPE_ID';

    public function setValue($type_name)
    {
        $this->fillable = ['TYPE_NAME'=>$type_name];
    }

    public function selectAll()
    {
        
        return $this->all();
    }

    public function addCategory()
    {
    	if (isset($_POST['add'])){
    	   	$this->setValue($_POST['nameCategory']);
    		$this->insert($this->fillable);
    		redirect('cat');
    	} 
    }
}
