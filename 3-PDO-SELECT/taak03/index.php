<?php
$database_lokatie = 'localhost';
$database_naam = 'toolsforever';
$database_gebruiker = 'root';
$database_wachtwoord = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$firstname = 'Mohamed';
$lastname = "Hadid";
$sql = 'SELECT * FROM users WHERE firstname= :firstname AND lastname = :lastname';
$statement = $database_connectie->prepare($sql);
$statement->bindParam(':firstname', $firstname);
$statement->bindParam(':lastname', $lastname);
$statement->execute();
$result = $statement->fetch();

echo $result[1].'<BR>';
echo $result[2].'<BR>';
echo $result[3].'<BR>';
echo $result[4].'<BR>';
// echo "<pre>";
// var_dump($result);
// echo "</pre>";
// foreach ($result as $row) {
//     // echo $results['firstname'] ." ". $results['lastname'] ." ". $results['email'] ."  ". $results['password'] . "<br>";
//     echo "<pre>";
//     var_dump(
//         $row[0]
//     );
//     echo "</pre>";
// }
