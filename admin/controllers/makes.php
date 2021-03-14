<?php 



switch($action) {

    case "list_makes":
        $makes = get_makes();
        include('view/make_list.php');
        break;


    case "get_make":
        // Write function to grab the data based on the ID
        $vehicles = get_vehicles_by_make($make_id);
        $makes = get_makes();
        $types = get_types();
        $classes = get_classes();
        include('view/vehicle_list.php');
        break;

}


?>