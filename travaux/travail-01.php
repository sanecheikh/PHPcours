<?php
/*
Travail-01 :

    Réaliser un script qui convertit une température de degré Celsius °C en degré Fahrenheit °F
    Afficher les résultats dans un tableau html table , utiliser la fonction php round pour arrondir à l'unité supérieur
    Voici le tableau de conversion que vous devez avoir :

| °C | °F |
|--- |--- |
| 25 | 77 |
| 03 | 37.4 |
| 35 | 95 |
| 11 | 51.8 |
 */

$tab=[25,03,35,11];
for($i=0 ; $i<count($tab);$i++){

$tab1[$i] = (9/5)*$tab[$i]+32;
echo $tab1[$i].'<br>';

}
;

