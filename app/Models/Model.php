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

    public function insert($param)
    {
        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)',
            $this->table,
            implode(', ', array_keys($param)),
            ':' . implode(', :', array_keys($param))
        );

        return $this->rawQuery($sql, $param);
    }

    public function deleteById($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE {$this->primaryKey} = '{$id}'";
        //echo $sql;

        return $this->rawQuery($sql, $param);
    }

    public function findById($id, $fields = ['*'])
    {
        $sql = "SELECT {$fields} FROM {$this->table} WHERE {$this->primaryKey} = '{$id}'";

        $models = $this->rawQuery($sql);

        if (count($models) > 0) {
            return $models[0];
        }
        return (object) [];
    }
}
