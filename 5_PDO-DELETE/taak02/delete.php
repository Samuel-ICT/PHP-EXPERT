<?php
$database_lokaal = 'localhost';
$database_naam = 'toolsforever';
$database_gebruiker = 'root';
$database_wachtwoord = '';

$database_connectie = new PDO("mysql:host=$database_lokaal;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$id = 7;
$sql = 'DELETE FROM products WHERE id = :id';
$statement = $database_connectie -> prepare($sql);
$statement->bindParam(':id', $id);
$statement->execute();
?>