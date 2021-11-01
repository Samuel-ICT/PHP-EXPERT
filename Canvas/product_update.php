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
        Koopprijs: <input type="number" name="koopprijs"><br>
        Verkoopprijs: <input type="number" name="verkoopprijs"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
$database_lokatie = 'localhost';
$database_naam = 'toolsforever';
$database_gebruiker = 'root';
$database_wachtwoord = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam",$database_gebruiker,$database_wachtwoord);

$sql = "UPDATE products SET name = :naam, purchase_price = :koopprijs, selling_price = :verkoopprijs WHERE id = :id";
if (isset($_POST['naam'])&&isset($_POST['koopprijs'])&&isset($_POST['verkoopprijs'])) {
   $naam = $_POST['naam'];
   $koopprijs = $_POST['koopprijs'];
   $verkoopprijs = $_POST['verkoopprijs'];
   $id = 6;
   $statement = $database_connectie->prepare($sql);
   $statement->bindParam(":naam",$naam);
   $statement->bindParam(":koopprijs",$koopprijs);
   $statement->bindParam(":verkoopprijs",$verkoopprijs);
   $statement->bindParam(":id",$id);
   $statement->execute();
   $result = $statement->fetch();
}

?>