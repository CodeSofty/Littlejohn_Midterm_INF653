<?php
    $dsn = 'mysql:host=g84t6zfpijzwx08q.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=zsoacbo8t52k0we8';
    $username = 'um65gkttlf3d0tct';
    $password = 't0q4zhu1m9wz3yio';

    try
    {
        $db = new PDO($dsn,$username,$password);
    } catch (PDOException $e)
    {
        $error = "Database error: ";
        $error .= $e -> getMessage();
        include('view/error.php');
        exit();
    }