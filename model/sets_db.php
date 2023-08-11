<?php

function get_all_sets(){
    global $db;
    $query = 'SELECT * FROM `mtg-sets` ORDER BY set_id';
    $statement = $db->prepare($query);
    $statement->execute();
    $sets = $statement->fetchAll();
    $statement->closeCursor();
    return $sets;
}

function add_set($mtg_set){
    global $db;
    $query = 'INSERT INTO `mtg-sets` (mtg_set) VALUES (:mtg_set)';
    $statement = $db->prepare($query);
    $statement->bindvalue(':mtg_set', $mtg_set);
    $statement->execute();
    $statement->closeCursor();
}

function delete_set($set_id){
    global $db;
    $query = 'DELETE FROM `mtg-sets` WHERE set_id = :set_id ';
    $statement = $db->prepare($query);
    $statement->bindvalue(':set_id', $set_id);
    $statement->execute();
    $statement->closeCursor();
}

function set_id_used($set_id){
    global $db;
    $query = 'SELECT * FROM cards WHERE set_id = :set_id';
    $statement = $db->prepare($query);
    $statement->bindvalue(':set_id', $set_id);
    $statement->execute();
    $isUsed = $statement->fetchAll();
    $statement->closeCursor();
    return $isUsed;
}