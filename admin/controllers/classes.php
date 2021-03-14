<?php 



switch($action) {

    case "list_classes":
        $classes = get_classes();
        include('view/class_list.php');
        break;



    case "get_class":
        $vehicles = get_vehicles_by_class($class_id);
        $makes = get_makes();
        $types = get_types();
        $classes = get_classes();
        include('view/vehicle_list.php');
        break;

}


?>