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
     public function getCategory($type_id)
    {	
        $sql = "SELECT * FROM {$this->table} WHERE TYPE_ID={$type_id}";
        //die($sql);
        return $this->rawQuery($sql);
    }

    public function updateCategory()
    {	if (isset($_POST['update'])){
    		$this->setValue($_POST['type_name']);
    		$this->updateById($_POST['type_id'], $this->fillable);
    		redirect('cat');
    	}
    }
}
