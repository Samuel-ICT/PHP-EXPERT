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
        Naam: <input type="text" name="naam"><br>
        Adres: <input type="text" name="adres"><br>
        Stad: <input type="text" name="stad"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
$database_lokatie = "localhost";
$database_naam = "toolsforever";
$database_gebruiker = "root";
$database_wachtwoord = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "INSERT INTO locations(name,address,city) VALUES(:naam, :adres, :stad)";
if (isset($_POST['naam'])&& isset($_POST['adres'])&& isset($_POST['stad'])) {
    $naam = $_POST['naam'];
    $adres = $_POST['adres'];
    $stad = $_POST['stad'];

    echo " ";
    $statement = $database_connectie->prepare($sql);
    $statement->bindParam(":naam", $naam);
    $statement->bindParam(":adres", $adres);
    $statement->bindParam(":stad", $stad);
    $statement->execute();
    $result = $statement->fetch();
}

?>