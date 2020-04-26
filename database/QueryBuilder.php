<?php

class QueryBuilder{

    public $pdo;

    //конструктор
    function  __construct(){
        //підключення до БД
        $this->pdo = new PDO("mysql:host=localhost; dbname=test1", "root","" );
    }



    function all($table){
        $statement = $this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    function delete($table, $id){

        $sql = "DELETE FROM $table WHERE id=:id";

        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    function store($table, $data){

        $keys = array_keys($data);

        $stringOfKeys = implode(',', $keys);

        $placeholders = ":".implode(', :', $keys);

        $sql = "INSERT INTO $table ($stringOfKeys) VALUES($placeholders)"; //зробити запит до бази

        $statement = $this->pdo->prepare($sql); //підготували запит

        $statement->execute($data); //виконали запит

        header("Location:/phpLearn/"); exit; //переадресація на головну
    }

    function update($table, $data){

        $fields = '';

        foreach($data as $key => $value){
            $fields .= $key."=:".$key.",";
        }
        $fields = rtrim($fields, ',');


        $sql = "UPDATE $table SET $fields WHERE id=:id";



        $statement = $this->pdo->prepare($sql);
        $result = $statement->execute($data);



    }

    function getOne($table, $id){

        $statement = $this->pdo->prepare("SELECT * FROM $table WHERE id=:id");
        $statement->bindParam(":id",$id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }


}

?>