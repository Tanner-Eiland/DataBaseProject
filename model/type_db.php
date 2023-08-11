<?php
function get_all_types(){
    global $db;
    $query = 'SELECT * FROM type ORDER BY type_id';
    $statement = $db->prepare($query);
    $statement->execute();
    $types = $statement->fetchAll();
    $statement->closeCursor();
    return $types;
}



function type_id_used($card_type_id){
    global $db;
    $query = 'SELECT * FROM cards WHERE type_id = :type_id';
    $statement = $db->prepare($query);
    $statement->bindvalue(':type_id', $card_type_id);
    $statement->execute();
    $isUsed = $statement->fetchAll();
    $statement->closeCursor();
    return $isUsed;
}