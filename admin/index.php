<!-- 
 Clean up links so they're not redundant
 -->




<?php
//require models

require('../model/database.php');
require('../model/classes_db.php');
require('../model/makes_db.php');
require('../model/types_db.php');
require('../model/vehicles_db.php');



$type_name = filter_input(INPUT_POST, 'type_name', FILTER_SANITIZE_STRING);
$class_name = filter_input(INPUT_POST, 'class_name', FILTER_SANITIZE_STRING);
$make_name = filter_input(INPUT_POST, 'make_name', FILTER_SANITIZE_STRING);
$vehicle_name = filter_input(INPUT_POST, 'vehicle_name', FILTER_SANITIZE_STRING);
$vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);

$year = filter_input(INPUT_POST, 'vehicle_year', FILTER_VALIDATE_INT);
$model = filter_input(INPUT_POST, 'vehicle_model', FILTER_SANITIZE_STRING); 
$price = filter_input(INPUT_POST, 'vehicle_price', FILTER_VALIDATE_INT);


$make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
if(!$make_id) {
    $make_id = filter_input(INPUT_GET, 'make_id', FILTER_VALIDATE_INT); 
}


$type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
if(!$type_id) {
    $type_id =  filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT); 
}



$class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
if(!$class_id) {
    $class_id = filter_input(INPUT_GET, 'class_id', FILTER_VALIDATE_INT); 
}

//List all possible vehicles
// Make sure parameter is capitalized like $result['Make'] and $result['ID'] or it won't work

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);

if(!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}


if(!$action) {
    $action = "list_vehicles";
} 

if($action == "list_vehicles" || $action == "delete_vehicle" || $action == "add_vehicle") {
    include('controllers/vehicles.php');
}

if($action == "list_types" || $action == "delete_type" || $action == "add_type" || $action == "get_type") {
    include('controllers/types.php');
}

if ($action == "list_makes" || $action ==  "add_make" || $action ==  "delete_make" || $action == "get_make") {
    include('controllers/makes.php');
} 

if ($action == "list_classes" || $action ==  "add_class" || $action ==  "delete_class" || $action == "get_class") {
    include('controllers/classes.php');
}


?>
