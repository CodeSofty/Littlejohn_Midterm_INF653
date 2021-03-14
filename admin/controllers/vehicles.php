<?php 



switch($action) {

        case "list_vehicles":
            $vehicles = get_vehicles();
            $makes = get_makes();
            $types = get_types();
            $classes = get_classes();
            $types = get_types();
            include('view/vehicle_list.php');
            break;

        case "add_vehicle":
            $makes = get_makes();
            $types = get_types();
            $classes = get_classes();
            $types = get_types();
            include('view/add_vehicle.php');

    
        case "delete_vehicle":
            if($type_id) {
                try{
                    delete_type($type_id);
                }catch(PDOexception $e) {
                    $e.showMessage();
                    $message = "vehicle_id is not valid, cannot delete without a valid vehicle_id";
                    include('view/error.php');
                    exit();
                }
                header('Location: .?action=list_vehicles');
    
            }
            break;
}




?>