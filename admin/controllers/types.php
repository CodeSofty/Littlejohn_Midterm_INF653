<?php 



switch($action) {

    case "list_types":
        $types = get_types();
        include('view/type_list.php');
        break;

    case "add_type": 
        add_type($type_name);
        header('Location: .?action=list_types');
        break;



    case "get_type": 
        $vehicles = get_vehicles_by_type($type_id);
        $makes = get_makes();
        $types = get_types();
        $classes = get_classes();
        include('view/vehicle_list.php');
        break;   

}


?>
