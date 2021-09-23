<?php
class Robot{
    public $naam;
    public $geluid;
    public $voortstuwing;

    function setSound($sound){
        $this->geluid = $sound;
    }

    function getSound(){
        return $this-> geluid;
    }

}
$wally = new Robot();
$wally->naam = 'Wal-e';
$wally->geluid = 'beepboop';
$wally->voortstuwing = 'rollend';
$wally-> setSound('beepboop');
echo $wally->getSound().'<br>';

$wolly = new Robot();
$wolly-> naam = 'Wol-e';
$wolly->geluid = 'boopbeep';
$wolly->voortstuwing = 'lopend';
$wolly-> setSound('boopbeep');
echo $wolly->getSound();
?>