<?php
$database_lokatie = 'localhost';
$database_naam = 'toolsforever';
$database_gebruiker = 'root';
$database_wachtwoord = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker,$database_wachtwoord);

$stad = 'Groningen';
$sql= 'SELECT * FROM locations WHERE city = :city';
$statement = $database_connectie->prepare($sql);
$statement->bindParam(':city', $stad);
$statement->execute();
$locatie = $statement->fetch();

echo $locatie[1].'<br>';
echo $locatie[2].'<br>';
echo $locatie[3].'<br>';
?>