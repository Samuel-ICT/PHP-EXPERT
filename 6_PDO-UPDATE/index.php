<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    Voornaam:<input type="text" name = "firstname">
    </form>
</body>
</html> -->
<?php
$database_lokaal = 'localhost';
$database_naam = 'toolsforever';
$database_gebruiker = 'root';
$database_wachtwoord = '';

$database_connectie = new PDO("mysql:host=$database_lokaal;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$firstname = 'Memphis';
$id = 12;
$sql = 'UPDATE users SET firstname = :firstname WHERE id = :id';
$statement = $database_connectie->prepare($sql);
$statement->bindParam(':firstname', $firstname);
$statement->bindParam(':id', $id);
$statement->execute();
?>