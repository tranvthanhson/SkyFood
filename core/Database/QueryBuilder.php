<?php

namespace Core\Database;

use PDO;

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function execute($sql, $param = '')
    {
        try {
            $statement = $this->pdo->prepare($sql);
            if ('' == $param) {
                $statement->execute();
            } else {
                $statement->execute($param);
            }
            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $ex) {
            die('Whoops, something went wrong!');
        }
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function delete($table, $parameters)
    {
        //DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';
        $sql = sprintf('DELETE FROM %s WHERE (%s) = %s',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        echo $sql;
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $ex) {
            die('Whoops, something went wrong!');
        }
    }
}
