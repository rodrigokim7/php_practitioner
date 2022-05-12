<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $stmt = $this->pdo->prepare("select * from {$table}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertData($table, $data){

        try {
            $stmt = $this->pdo->prepare("insert into {$table} (name, age, city) values (?, ?, ?)");
            $stmt->execute([$data['name'], $data['age'], $data['city']]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }
    
}