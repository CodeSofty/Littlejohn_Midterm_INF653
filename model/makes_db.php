<?php 


// Get selection list for Makes


function get_makes() {
    global $db;

    $query = 'SELECT * FROM makes';

$statement = $db->prepare($query);
$statement->execute();
$results = $statement->fetchALL();
$statement->closeCursor();
return $results;

}



?>