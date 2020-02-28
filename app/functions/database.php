<?php

function connect(){
    $pdo = new \PDO("mysql:host=localhost;dbname=db_devclass;charset=utf8", 'root', '1q2w3e4r5t');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}

function create($table, $fields){    
    if(!is_array($fields)){
        $fields = (array) $fields;
    }
    
    $sql = "INSERT INTO {$table} (";
    $sql = $sql .implode(', ', array_keys($fields));
    $sql = $sql . ") VALUES (:";
    $sql = $sql .implode(', :', array_keys($fields)).")";
    
    $pdo = connect();    
    $insert = $pdo->prepare($sql);
    return $insert->execute($fields);    
}

function all($table){
    $pdo = connect();    
    $sql = "SELECT * FROM {$table}";   
    $list = $pdo->query($sql);
    $list->execute();
    return $list->fetchAll();
}

function update(){

}

function find(){

}

function delete(){

}