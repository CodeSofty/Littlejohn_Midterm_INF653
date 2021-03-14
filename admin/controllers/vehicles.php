<?php 
switch($action) {

    default: 
        $vehicles = get_vehicles();
        $makes = get_makes();
        $types = get_types();
        $classes = get_classes();
        include('../view/vehicle_list.php');
}




?>