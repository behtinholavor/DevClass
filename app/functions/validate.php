<?php

function validate(array $fields) {
    $request = request();
    $validate = [];
    foreach ($fields as $field => $type) {
        switch ($type) {
            case 's':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_STRING);
                break;            
            case 'i':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
                break;
            case 'e':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                break;
        }
    }
    return (object) $validate;
}

function isEmpty() {
    $request = request();
    $empty = false;
    foreach ($request as $key => $value) {
        if($key <> 'id' && empty($request[$key])) {
            $empty = true;
        }                
    }
    return $empty;
}

function loadId() {
    $id = isset($_GET['id']) ? $_GET['id'] : "0";     
    return $id;
}

function validId(&$id) {    
    $state = false; 
    $id = (($id == null) || ($id == '')) ? '0' : $id;    
    $int = intval($id);
    $state = ($int > 0) ? true : false;    
    return $state;
}