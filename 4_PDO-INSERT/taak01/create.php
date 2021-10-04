<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="" method= "POST">
    Voornaam:<input type="text" name="voornaam"><br>
    Achternaam:<input type="text" name="achternaam"><br>
    <input type="submit" value = "Submit">
    
    <?php
    $database_lokatie = 'localhost';
    $database_naam = 'toolsforever';
    $database_gebruiker = 'root';
    $database_wachtwoord = '';

    $database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam",$database_gebruiker,$database_wachtwoord);

    if(isset($_POST['voornaam'])&& isset($_POST['achternaam'])){
      $voornaam = $_POST['voornaam'];
      $achternaam = $_POST['achternaam'];
      echo "";
    }
    $sql = 'INSERT INTO users (firstname, lastname) VALUES (:ph_voornaam, :ph_achternaam)';

    $statement = $database_connectie->prepare($sql);
    $statement -> bindParam(':ph_voornaam', $voornaam);
    $statement -> bindParam(':ph_achternaam', $achternaam);
    $statement->execute();
    ?>

  </form> 
   
</body>
</html>

