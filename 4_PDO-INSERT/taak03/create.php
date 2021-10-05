<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    Naam: <input type="text" name="naam" value =" "><br>
    Koopprijs € <input type="number" name="koopprijs" value="0"><br>
    Verkoopprijs € <input type="number" name="verkoopprijs" value="0"><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
$database_lokatie = 'localhost';
$database_naam = 'toolsforever';
$database_gebruiker = 'root';
$database_wachtwoord = '';

$database_connectie = new PDO("mysql:host=$database_lokatie; dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

if(isset($_POST['naam'])&& isset($_POST['koopprijs'])&&isset($_POST['verkoopprijs'])){
    $naam = $_POST['naam'];
    $koopprijs = $_POST['koopprijs'];
    $verkoopprijs = $_POST['verkoopprijs'];
    echo " ";
    $sql = 'INSERT INTO products(name, purchase_price, selling_price) VALUES(:naam, :koopprijs, :verkoopprijs)';
    
    $statement = $database_connectie->prepare($sql);
    $statement -> bindParam(':naam', $naam);
    $statement -> bindParam(':koopprijs', $koopprijs);
    $statement -> bindParam(':verkoopprijs', $verkoopprijs);
    $statement -> execute();
}


?>