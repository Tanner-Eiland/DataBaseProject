<?php

function get_all_colors(){
    global $db;
    $query = 'SELECT * FROM colors ORDER BY Color_id';
    $statement = $db->prepare($query);
    $statement->execute();
    $class = $statement->fetchAll();
    $statement->closeCursor();
    return $class;
}



function color_id_used($color_id){
    global $db;
    $query = 'SELECT * FROM cards WHERE color_id = :color_id';
    $statement = $db->prepare($query);
    $statement->bindvalue(':color_id', $color_id);
    $statement->execute();
    $isUsed = $statement->fetchAll();
    $statement->closeCursor();
    return $isUsed;
}