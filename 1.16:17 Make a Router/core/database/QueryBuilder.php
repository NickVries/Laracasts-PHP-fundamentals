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

        return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    }


    public function selectFirst($table)
    {
        $statement = $this->pdo->prepare(
            "SELECT * FROM {$table} ORDER BY id ASC LIMIT 1"
        );

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectLast($number, $table)
    {
        $statement = $this->pdo->prepare(
            "SELECT * FROM {$table} ORDER BY id DESC LIMIT $number"
        );
        $statement->execute();

        return $statement->fetchALL(PDO::FETCH_CLASS);
    }
}
