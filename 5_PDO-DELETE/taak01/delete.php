
<?php
$database_lokatie = "localhost";
$database_naam = 'toolsforever';
$database_gebruiker = 'root';
$database_wachtwoord = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$id = 2;
$sql = 'DELETE FROM products WHERE id = :id';
$statement = $database_connectie->prepare($sql);
$statement ->bindParam(':id', $id);
$statement ->execute();
?>