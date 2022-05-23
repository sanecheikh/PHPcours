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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
</head>
<body>
    <style>
        
table,th,td{
border: 1px solid black;
border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left}

</style>
<table>
  <tr>
    <td>0°C</td>
    <td>25°</td>
    <td>03°</td>
    <td>35°</td>
    <td>11°</td>
  </tr>
  <tr>
  <td>0°F</td>
    <td>77°</td>
    <td>37.4°</td>
    <td>95°</td>
    <td>51.8°</td>
</tr>

</table>
</body>
</html>
