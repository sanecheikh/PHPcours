<?php
// constantes
define('HOST','localhost');
define('USER ', 'root');
echo  HOST;

var_dump(HOST);
//print_r(USER);

$x = 4;
$y = 2;
$z =5;
//$calcul = $x + $Y;
//$calcul = $x * $Y;
//$calcul = $x / $Y;
//$calcul = $x % $Y;
$calcul = $x ** $y;
$calcul = $x  + ($y * $z);

//echo $calcul;

// affectation
$a ='5';
$b =7;
//$a +=6; // $a =$a + 6;
//$a +=$b;
//$a -=$b;
$a *= $b;

echo $a;
// creer 2 variables prix ht et tva 
//afficher le calcul du prix ttc


 //calculer l'age d'une personne en renseignant son annee de naissance ,utilier la fonction  date .


$dn = 2022;
$dn= $dn +8/12;
$age = (date("y") +date("m")/12)-$dn;
echo "\ntest:", $dn, " age:", $age, "\n";
echo "Age",(int)$age;

?>