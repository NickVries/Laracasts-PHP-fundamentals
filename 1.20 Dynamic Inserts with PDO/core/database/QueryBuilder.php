<?php

class QueryBuilder
{
    /** @var PDO */
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertInto($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':'.implode(', :', array_keys($parameters))
        );
        die($sql);
        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }




//    public function insertInto($table, $data)
////    {
////        $columnsString = implode(", ", array_keys($data));
////        $valueArray = array_map(function() {
////            return '?';
////        }, $data);
////        $valuesString = implode(", ", $valueArray);
////
////        $statement = $this->pdo->prepare("
////            INSERT INTO {$table}
////            ($columnsString)
////            values
////            ($valuesString)
////        ");
////
////        $statement->execute(array_values($data));
////    }


    public function selectFirst($table)
    {
        $statement = $this->pdo->prepare(
            "SELECT * FROM {$table} ORDER BY id ASC LIMIT 1"
        );

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectLastFrom($table, $number = 1)
    {
        $statement = $this->pdo->prepare(
            "SELECT * FROM {$table} ORDER BY id DESC LIMIT $number"
        );
        $statement->execute();

        return $statement->fetchALL(PDO::FETCH_ASSOC);
    }
}
