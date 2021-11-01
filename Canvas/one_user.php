<?php
$database_lokatie = "localhost";
$database_naam = "toolsforever";
$database_gebruiker = "root";
$database_wachtwoord = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker,$database_wachtwoord);

$voornaam = "Bert";
$achternaam = "Koning";
$sql = "SELECT * FROM users WHERE firstname = :firstname AND lastname = :lastname";

$statement = $database_connectie->prepare($sql);
$statement->bindParam("firstname", $voornaam);
$statement->bindParam("lastname", $achternaam);
$statement->execute();
$result = $statement->fetch();


echo $result[1]."<br>";
echo $result[2]."<br>";
echo $result[3]."<br>";
?>