<?php 
// Get Selection for Classes

function get_classes() {
    global $db;

    $query = 'SELECT * FROM classes';

$statement = $db->prepare($query);
$statement->execute();
$results = $statement->fetchALL();
$statement->closeCursor();
return $results;

}




?>