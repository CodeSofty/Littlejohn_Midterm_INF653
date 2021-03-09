<?php


// Get Selection for Types

function get_types($type_id) {
    global $db;

$query = 'SELECT * FROM types
    WHERE ID = :type_id';
$statement = $db->prepare($query);
$statement->bindValue(':type_id', $type_id);
$statement->execute();
$results = $statement->fetchALL();
$statement->closeCursor();
return $results;

}




?>