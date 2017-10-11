<?php

namespace App\Models;

use Core\App;

class Model
{

    protected $table = '';
    protected $primaryKey = 'id';
    protected $db = null;

    public function __construct()
    {
        $this->db = App::get('database');
    }

    public function rawQuery($sql, $param = '')
    {
        return $this->db->execute($sql, $param);
    }

    public function all($fields = ['*'])
    {
        $fields = implode(',', $fields);
        $sql = "SELECT {$fields} FROM {$this->table}";
        return $this->rawQuery($sql);
    }

    public function insert($params)
    {

        $sql = "INSERT INTO {$this->table} (";
        foreach ($params as $key => $value) {
            $sql .= "$key, ";
        }
        $sql = substr($sql, 0, -2) . ') VALUES (';
        foreach ($params as $key => $value) {
            $sql .= "'$value', ";
        }
        $sql = substr($sql, 0, -2) . ')';

        return $this->rawQuery($sql);
    }

    public function updateById($id, $params)
    {
        // UPDATE Customers SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE CustomerID = 1;
        $sql = "UPDATE {$this->table} SET ";
        foreach ($params as $key => $value) {
            $sql .= "`{$key}` = \"{$value}\",";
        }
        $sql = trim($sql, ',');
        $sql .= " WHERE $this->primaryKey = '{$id}'";

        //echo $sql;
        return $this->rawQuery($sql);
    }

    public function deleteById($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE {$this->primaryKey} = '{$id}'";
        //echo $sql;
        return $this->rawQuery($sql, $param);
    }

    public function findById($id, $fields = '*')
    {
        $sql = "SELECT {$fields} FROM {$this->table} WHERE {$this->primaryKey} = '{$id}'";
        $models = $this->rawQuery($sql);
        if (count($models) > 0) {
            return $models[0];
        }
        return (object) [];
    }
}
