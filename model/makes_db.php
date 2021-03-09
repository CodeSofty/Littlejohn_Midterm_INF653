<?php 


// Get selection list for Makes


function get_makes($make_id) {
    global $db;

    $query = 'SELECT vehicles.year, vehicles.model, vehicles.price, types.type, classes.class, makes.Make, makes.ID FROM vehicles 
    INNER JOIN types
    ON vehicles.type_id = types.id
    INNER JOIN classes
    ON vehicles.class_id = classes.id
    INNER JOIN makes
    ON vehicles.make_id = makes.ID
    WHERE make_id = makes.ID';

$statement = $db->prepare($query);
$statement->bindValue(':make_id', $make_id);
$statement->execute();
$results = $statement->fetchALL();
$statement->closeCursor();
return $results;

}



?>