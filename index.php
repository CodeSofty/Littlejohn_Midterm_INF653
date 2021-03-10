<?php
//require models

require('model/database.php');
require('model/classes_db.php');
require('model/makes_db.php');
require('model/types_db.php');
require('model/vehicles_db.php');



// get required data from models (makes types classes)
// Get parameter data from forms
// Get data for view (make,type,class in the drop down menus)
// Show view

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


switch($action) {

    case "get_make":
        // Write function to grab the data based on the ID
        $vehicles = get_vehicles_by_make($make_id);
        $makes = get_makes();
        $types = get_types();
        $classes = get_classes();
        include('view/vehicle_list.php');
        break;


        case "get_class":
        $vehicles = get_vehicles_by_class($class_id);
        $makes = get_makes();
        $types = get_types();
        $classes = get_classes();
        include('view/vehicle_list.php');
        break;


        case "get_type": 
        $vehicles = get_vehicles_by_type($type_id);
        $makes = get_makes();
        $types = get_types();
        $classes = get_classes();
        include('view/vehicle_list.php');
        break;


    default:
        $vehicles = get_vehicles();
        $makes = get_makes();
        $types = get_types();
        $classes = get_classes();

        include('view/vehicle_list.php');
}

?>