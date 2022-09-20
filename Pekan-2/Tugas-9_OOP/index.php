<?php 

include './animal.php';
include './ape.php';
include './Frog.php';

$sheep = new Animal("Shaun");
echo $sheep->name; //Shaun
echo "<br>";
echo $sheep->legs; // 4
echo "<br>";
echo $sheep->cold_blooded; // "no"
echo "<hr>";
$sungokong = new Ape("kera sakti");
echo $sungokong->yell(); // "Auooo"
echo "<br>";
$kodok = new Frog("buduk");
echo $kodok->jump() ; // "hop hop"
echo "<hr>";
echo "outup akhir:";
echo "<br>";


echo $sheep->getCetakData();
echo "<br>";
echo $kodok->getCetakData();
echo "<br>";
echo $sungokong->getCetakData();
?>