<?php
$medewerkers = [
    [
      'voornaam' => 'Willem',
      'achternaam' => 'van Oranje',
      'functie'  => 'koning'
    ],
    [
      'voornaam' => 'Donald',
      'achternaam' => 'Trump',
      'functie'  => 'president'
    ]
  ];

  echo $medewerkers[0]['voornaam']." " .$medewerkers[0]['achternaam'] . " is een " .$medewerkers[0] ['functie']. "<br>";
  echo $medewerkers[1]['voornaam']." " .$medewerkers[1]['achternaam'] . " is een " .$medewerkers[1] ['functie'];
  
?>
