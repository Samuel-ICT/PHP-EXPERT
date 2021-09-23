<?php
$database_lokatie = 'localhost';
$database_naam = 'toolsforever';
$database_gebruiker = 'root';
$database_wachtwoord = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = 'SELECT * FROM locations';
$statement = $database_connectie->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($database_gegevens as $lokaties) {
    echo '<h3>'.$lokaties['name']. "</h3>";
    echo 'Adres:'. " ".$lokaties['address']. "<br> <br>";
    echo 'Stad:'. " ". $lokaties['city'];
}
?>