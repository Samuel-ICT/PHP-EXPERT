<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Voornaam: <input type="text" name="voornaam"><br>
        Achternaam: <input type="text" name="achternaam"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
$database_lokatie = 'localhost';
$database_naam = 'toolsforever';
$database_gebruiker = 'root';
$database_wachtwoord = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];

$sql = 'INSERT INTO users(firstname, lastname) VALUES(:voornaam, :achternaam)';
$statement = $database_connectie->prepare($sql);
$statement->bindParam(':voornaam', $voornaam);
$statement->bindParam(':achternaam', $achternaam);
$statement->execute();
$naam = $statement->fetch();
?>