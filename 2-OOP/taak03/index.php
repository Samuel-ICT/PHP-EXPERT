<?php
class Product{
    public $merk;
    public $prijs;
    public $type;
    public $kleur;
}
$dweil = new Product();
$dweil ->merk = 'hema'.'<br>';
$dweil ->prijs = '10'.'<br>';
$dweil ->type = 'lang'.'<br>';
$dweil ->kleur = 'rood'.'<br>';
$stofzuiger = new Product();
$stofzuiger ->merk = 'aegon'.'<br>';
$stofzuiger ->prijs = '50'.'<br>';
$stofzuiger ->type = 'gfs505'.'<br>';
$stofzuiger ->kleur = 'grijs'.'<br>';
echo $dweil ->merk;
echo $dweil ->prijs;
echo $dweil ->type;
echo $dweil ->kleur;
echo '<hr>';
echo $stofzuiger ->merk;
echo $stofzuiger ->prijs;
echo $stofzuiger ->type;
echo $stofzuiger ->kleur;
?>