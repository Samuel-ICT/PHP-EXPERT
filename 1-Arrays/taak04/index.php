<?php

$speelgoed = [

    ['bal', 'knuffelbeer', 'Catan'],['sport','knuffels','bordspel'],['5.00', '9.50', '39.00']
];
echo "Speelgoed " .$speelgoed[0][0]. " uit de categorie ".$speelgoed[1][0]." kost ".$speelgoed[2][0]."<br>";
echo "Speelgoed " .$speelgoed[0][1]. " uit de categorie ".$speelgoed[1][1]." kost ".$speelgoed[2][1]."<br>";
echo "Speelgoed " .$speelgoed[0][2]. " uit de categorie ".$speelgoed[1][2]." kost ".$speelgoed[2][2]."<br>";


$games = [
    'naam' => ['Fifa','Doom','Left for dead 2'],
    'uitgever' => ['EA','Bethesda','Valve'],
    'prijs' => ['60.00','60.00','40.00']
    
];
echo "Game " .$games['naam'][0]. " van uitgever " .$games['uitgever'][0]." kost " .$games['prijs'][0]."<br>";
echo "Game " .$games['naam'][1]. " van uitgever " .$games['uitgever'][1]." kost " .$games['prijs'][1]."<br>";
echo "Game " .$games['naam'][2]. " van uitgever " .$games['uitgever'][2]." kost " .$games['prijs'][2]."<br>";
