<h1>un titre<h1>

<?php
// echo/print
echo 'Texte en php','Autre texte ';
//print 'Texte en php avec print<br>' ,
//'Autre texte avec print'

//un commentaire 
# un commentaire 
/*commmentairs
/* 
*commmentaire 
* sur plusieurs
*ligne 
*/

//variables
$variable='une variable ';
$variable ='une autre varriable ';
echo $variable, $variable;
//$var = 34;
$_3var =34;
echo $_3var;


$camelcase =' une variable en camalcase';
$snake_case =' une variabl en snakecase';
$pascalCase =' une variable pascale case';
$var ='une variable en kebab_case';

//string
$nom =' oumar ';
//int 
$nombre =34;
//bool
$vrai = true;
$faux =false;

$tableau =[ 'groupe ',34,45,6 ,false];
//null
$variable = null;

//simple /double guillemets (quotes)

//message='"aujourd 'hui";
//$message = 'aujourd\'hui';
 $txt = 'Bonjour';
 echo '$txt tout le mondr<br>';
 echo "$txt tout le monde";

 //concatention
 $fruit1 ='kiwi';
 $fruit2 ='Pomme';
 $fruit3 ='Banane';
 $fruit2.='Poire';

 //echo $fruit1 .'<br>' .$fruit2;
 //echo $fruit2 . '<br>';
 // echo $fruit;
 $html ='';
$html .= '<h1>cours de php</h1>';
$html .= '<p>Ajout d\'un texte dans un paragraphe';
 echo $html;
?>
<h2>Texte ne html dans une php </h2>

<?php
    $titre ='Texte de titre ';
    ?>
    <h4><?php echo $titre; ?></h4>

    <h4><?= $titre; ?></h4>
<!--
    $data1 ='hello,  ';
    $data2 ='les terriens, ';
    $data3 ='Mars,   ';
    $data4 ='planetes,   ';

    //avec les 2 methodes de concatenation ecrites la phrase dans un paragraphe :
  hello ,les terriens je viens de la planete Mars.
-->

<?php
 $data1 ='hello ,les terriens ';
 $data2 ='je viens de la planet ';
 $data3 ='Mars  ';
 $data4 ='planetes  ';
 ?>

 <p><?= $data1 . ',' . $data2. '.je viens de la planete Mars'  . $data4 . '' . $data3 . '.';?></p>
   <?php
