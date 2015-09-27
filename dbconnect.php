<?php
$host   = 'localhost';
$dbname = 'test';
$db_username = 'root'; 
$db_password = ''; 

$conn = new PDO(
    'mysql:host=' . $host.
    ';dbname=' . $dbname,
    $db_username,
    $db_password
);
?>