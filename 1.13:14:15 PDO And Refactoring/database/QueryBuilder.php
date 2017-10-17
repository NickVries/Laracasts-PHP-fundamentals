<?php

class QueryBuilder
{
    /** @var PDO */
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function selectFirst($table, $intoClass)
    {
        $statement = $this->pdo->prepare(
            "SELECT * FROM {$table} ORDER BY id ASC LIMIT 1"
        );

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function selectLast($number, $table, $intoClass)
    {
        $statement = $this->pdo->prepare(
            "SELECT * FROM {$table} ORDER BY id DESC LIMIT $number"
        );
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
}
