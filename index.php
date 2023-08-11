<?php 
require('model/database.php');
require('model/card_db.php');
require('model/colors_db.php');
require('model/sets_db.php');
require('model/type_db.php');



$card_ID = filter_input(INPUT_POST, 'card_ID', FILTER_VALIDATE_INT);

$name = filter_input(INPUT_POST, 'name', FILTER_VALIDATE_INT);
$description = filter_input(INPUT_POST, 'description', FILTER_UNSAFE_RAW);
$cmc = filter_input(INPUT_POST, 'cmc', FILTER_VALIDATE_INT);
if(!$cmc){
    $cmc = filter_input(INPUT_GET, 'cmc', FILTER_VALIDATE_INT);
};
$picture = filter_input(INPUT_POST, 'picture', FILTER_UNSAFE_RAW);

$color_id = filter_input(INPUT_POST, 'color_id', FILTER_VALIDATE_INT);
if(!$color_id){
    $color_id = filter_input(INPUT_GET, 'color_id', FILTER_VALIDATE_INT);
};

$card_type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
if(!$card_type_id){
    $card_type_id = filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
};

$card_set_id = filter_input(INPUT_POST, 'set_id', FILTER_UNSAFE_RAW);
if(!$card_set_id) {
    $card_set_id = filter_input(INPUT_GET, 'set_id', FILTER_UNSAFE_RAW);
};


$card_type = filter_input(INPUT_POST, 'card_type', FILTER_UNSAFE_RAW);


$card_color = filter_input(INPUT_POST, 'card_color', FILTER_UNSAFE_RAW);

$card_set = filter_input(INPUT_POST, 'card_set', FILTER_UNSAFE_RAW);



$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW);
    if (!$action) {
        $action = 'home_page';
    };
};


switch ($action) {
    case "home_page":
        $cardsBy = get_cards_by_color_set_cmc_type($color_id, $card_set_id, $cmc, $card_type_id);
        $colors = get_all_colors();
        $types = get_all_types();
        $sets = get_all_sets();
        include('view/home_page.php');
        break;
    case "image_scan":
        include('view/image_scan.php');
        break;
    case "test":
        delete_type("test");
        break;
    default:
        $cardsBy = get_cards_by_color_set_cmc_type($color_id, $card_set_id, $cmc, $card_type_id);
        $colors = get_all_colors();
        $types = get_all_types();
        $sets = get_all_sets();
        include('view/home_page.php');
}