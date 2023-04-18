<?php

use Armor\Armor_Textile;
use Armor\Armor_Leather;
use Armor\Armor_Steel;
use Horses\Horse;
use Weapons\Axe;
use Weapons\Bow;
use Weapons\Halderd;
use Weapons\Spear;
use Weapons\Peak;

include_once 'Warriors/Mounted.php';
include_once 'Warriors/Foot_Warrior.php';
include_once 'Weapons/Axe.php';
include_once 'Weapons/Bow.php';
include_once 'Weapons/Halderd.php';
include_once 'Weapons/Peak.php';
include_once 'Weapons/Spear.php';
include_once 'Armor/Armor_Textile.php';
include_once 'Armor/Armor_Leather.php';
include_once 'Armor/Armor_Steel.php';
include_once 'Squad.php';
include_once 'Warriors/Commander.php';
include_once 'Achievements/Defense.php';
include_once 'Achievements/Health.php';
include_once 'Achievements/Boost.php';

$wer = new Mounted('Vasya',new Axe(),100,new Armor_Textile(),20,new Horse());
$wer2 = new Mounted('Dobrinya',new Bow(),100,new Armor_Textile(),20,new Horse());
//echo $wer2;
//echo "<p>----------------------------------------------------------</p>";
//$wer2->Attack($wer);
//echo "<p>----------------------------------------------------------</p>";
//$wer->Moving();
//echo "<p>----------------------------------------------------------</p>";
//$wer->Protection();
$comm = new Commander();
$comm->add_achivment(new Defense());
$squad = new Squad("Squad №1",$comm);
echo $squad->getNameSquad();
echo "<p>------------------</p>";
$squad->addToSquad(new Mounted('Alyosha',new Axe(),100,new Armor_Textile(),20,new Horse()));
$squad->addToSquad(new Mounted('Ilya',new Bow(),100,new Armor_Leather(),10,new Horse()));
$squad->addToSquad(new Foot_Warrior('Vova',new Halderd(),100,new Armor_Leather(),25));
$squad->addToSquad(new Mounted('Sergey',new Axe(),100,new Armor_Leather(),30,new Horse()));
$squad->addToSquad(new Foot_Warrior('Vlad',new Peak(),100,new Armor_Textile(),20));
$squad->addToSquad(new Foot_Warrior('Roma',new Spear(),100,new Armor_Leather(),15));
$squad->getSquad();


$comm_2 = new Commander();
$comm_2->add_achivment(new Health());
$squad_2 = new Squad("Squad №2",$comm_2);
echo "<p>-------------------------------------------------------------------------------------------------------------</p>";
echo '<br>'.$squad_2->getNameSquad();
echo "<p>------------------</p>";
$squad_2->addToSquad(new Foot_Warrior('Filip', new Bow(),100,new Armor_Textile(),20));
$squad_2->addToSquad(new Foot_Warrior('Clavdiy',new Axe(),100,new Armor_Steel(),10));
$squad_2->addToSquad(new Mounted('Maksim',new Halderd(),100,new Armor_Leather(),25,new Horse()));
$squad_2->addToSquad(new Mounted('Evkakiy',new Axe(),100,new Armor_Leather(),30,new Horse()));
$squad_2->addToSquad(new Mounted('Gordon',new Peak(),100,new Armor_Textile(),20,new Horse()));
$squad_2->addToSquad(new Foot_Warrior('Slavik',new Spear(),100,new Armor_Leather(),15));
$squad_2->getSquad();
?>