<?php

function connect(){
    $pdo = new \PDO("mysql:host=localhost;dbname=db_devclass;charset=utf8", 'root', '1q2w3e4r5t');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}

function create($table, $fields){
    //$pdo = connect();
    dd($fields);

}

function update(){

}

function find(){

}

function delete(){

}