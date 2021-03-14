<?php


// Get Selection for Types

function get_types() {
    global $db;
$query = 'SELECT * FROM types';
$statement = $db->prepare($query);
$statement->execute();
$results = $statement->fetchALL();
$statement->closeCursor();
return $results;

}

function add_type($type_name) {
    global $db;
    $query = 'INSERT INTO types (Type)
    VALUES (:type_name)';
    $stateent = $db->prepare($query);
    $statement->bindValue(':type_name', $type_name);
    $statement->execute();
    $statement->closeCursor();
}


?>
