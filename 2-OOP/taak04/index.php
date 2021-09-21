<?php
class Scooter{
    public $merk ;
    public $kleur;
    public $inhoudTank;
    public function checkInhoud(){
        if ($this->inhoudTank > 0) {
            echo 'De tank is niet leeg <br>';
        }
        else{
            echo 'De tank is leeg';
        }
    }
    

}
$piago = new Scooter();
 $piago->merk = 'piago'; 
 $piago ->kleur = 'blauw';
 $piago ->inhoudTank = '6';
 $piago -> checkInhoud();

$peugeot = new Scooter();
$peugeot->merk = 'peugeot';
$peugeot->kleur= 'zwart';
$peugeot->inhoudTank = '7'; 
$peugeot -> checkInhoud();

