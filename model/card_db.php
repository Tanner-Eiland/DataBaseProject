<?php
function get_cards(){
    global $db;
    $query = 'SELECT *
                FROM cards';
    $statement = $db->prepare($query);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    return $cards;
}


Function get_card_color($cards_id){
    global $db;
    $query = 'SELECT colors.color FROM cards 
                INNER JOIN colors ON cards.color_id = colors.Color_id
                WHERE cards.ID = :cardsID';
    $statement = $db->prepare($query);
    $statement->bindvalue(':cardsID', $cards_id);
    $statement->execute();
    $make = $statement->fetchAll();
    $statement->closeCursor();
    return $color;
}

function delete_card_by_ID($card_id){
    global $db;
    $query = 'DELETE FROM cards WHERE ID = :cardID';
    $statement = $db->prepare($query);
    $statement->bindvalue(':cardID', $card_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_card($name, $cmc, $description, $color_id, $picture, $set_id, $type_id ){
    global $db;
    $query = 'INSERT INTO cards( Name, CMC, Description, Color_id, picture, set_id, type_id) VALUES (:name, :cmc, :desc, :color, :pic, :set, :type)';
    $statement = $db->prepare($query);
    $statement->bindvalue(':name', $name);
    $statement->bindvalue(':cmc', $cmc);
    $statement->bindvalue(':desc', $description);
    $statement->bindvalue(':color', $color_id);
    $statement->bindvalue(':pic', $picture);
    $statement->bindvalue(':set', $set_id);
    $statement->bindvalue(':type', $type_id);
    $statement->execute();
    $statement->closeCursor();
}



function get_cards_by_color_set_cmc_type($card_color_id, $card_set_id, $cmc, $card_type_id) {
    global $db;
    


    if ($card_color_id && $card_set_id && $cmc && $card_type_id){
            $query = 'SELECT * 
                       FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.type_id = :cardType AND cards.color_id = :cardColor AND cards.set_id = :cardSet AND cards.CMC = :cmc
                        ORDER BY Name';
        } else if ($card_color_id && $card_set_id && $cmc && !$card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.color_id = :cardColor AND cards.set_id = :cardSet AND cards.CMC = :cmc
                        ORDER BY Name';
        } else if ($card_color_id && $card_set_id && !$cmc && $card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.type_id = :cardType AND cards.color_id = :cardColor AND cards.set_id = :cardSet
                        ORDER BY Name';
        } else if ($card_color_id && !$card_set_id && $cmc && $card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.type_id = :cardType AND cards.color_id = :cardColor AND cards.CMC = :cmc
                        ORDER BY Name';
        } else if (!$card_color_id && $card_set_id && $cmc && $card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.type_id = :cardType AND cards.set_id = :cardSet AND cards.CMC = :cmc
                        ORDER BY Name';
        } else if ($card_color_id && $card_set_id && !$cmc && !$card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.color_id = :cardColor AND cards.set_id = :cardSet
                        ORDER BY Name';
        } else if ($card_color_id && !$card_set_id && $cmc && !$card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.color_id = :cardColor AND cards.CMC = :cmc
                        ORDER BY Name';
        } else if (!$card_color_id && $card_set_id && $cmc && !$card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.set_id = :cardSet AND cards.CMC = :cmc
                        ORDER BY Name';
        } else if (!$card_color_id && $card_set_id && !$cmc && $card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.type_id = :cardType AND cards.set_id = :cardSet
                        ORDER BY Name';
        } else if (!$card_color_id && !$card_set_id && $cmc && $card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.type_id = :cardType AND cards.CMC = :cmc
                        ORDER BY Name';
        } else if ($card_color_id && !$card_set_id && !$cmc && $card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.type_id = :cardType AND cards.color_id = :cardColor
                        ORDER BY Name';
        } else if (!$card_color_id && !$card_set_id && !$cmc && $card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.type_id = :cardType
                        ORDER BY Name';
        } else if (!$card_color_id && !$card_set_id && $cmc && !$card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.CMC = :cmc
                        ORDER BY Name';
        } else if (!$card_color_id && $card_set_id && !$cmc && !$card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.set_id = :cardSet
                        ORDER BY Name';
        } else if ($card_color_id && !$card_set_id && !$cmc && !$card_type_id) {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        WHERE cards.color_id = :cardColor
                        ORDER BY Name';
        } else {
            $query = 'SELECT * 
                        FROM cards INNER JOIN type ON cards.type_id = type.type_id
                        INNER JOIN colors ON cards.color_id = colors.color_id
                        INNER JOIN `mtg-sets` ON cards.set_id = `mtg-sets`.set_id
                        ORDER BY Name';
        };
    
    
    $statement = $db->prepare($query);
    if($card_color_id){
    $statement->bindValue(':cardColor', $card_color_id);
    };
    if($card_set_id){
    $statement->bindValue(':cardSet', $card_set_id);
    };
    if($card_type_id){
    $statement->bindValue(':cardType', $card_type_id);
    };
    if($cmc){
    $statement->bindValue(':cmc', $cmc);
    };
    $statement->execute();
    $cardsBy = $statement->fetchAll();
    $statement->closeCursor();
    return $cardsBy;
}


