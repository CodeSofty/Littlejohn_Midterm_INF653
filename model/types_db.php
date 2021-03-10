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




?>