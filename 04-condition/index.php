<?php
/*
<
>
<=
>=
=
==: comaparaison d'egaliter en valeur 
=== // //    valeur et en type
!= differnece sur la valeur
!== //// sur le type
*/

//===============
//if /elseif/else
//===============


$age =20 ;
if($age >=18){
    echo 'vous avez le droit de voter';


} elseif ($age <=25)
{
     " vous avez le droit de vote car votre age est de $age ans";
    }
else{
    //echo 'vous n'\' avez pas le droit ';
    echo " vous n'avez pas le droit car votre age est de ' .age ans " ; 
}




echo '<hr>';
$heure =date ('H');
echo $heure.'<br>';
// avec la  condition if /else afficher si on est le matin ou le soir 
if ($heure<=12){

    echo "c'est le matin ,il est $heure !";
  } elseif($heure<=16)
  
  { echo " c'est l'apres midi ,il est $heure !";
    }else {
        echo "c'est le soir ,il est $heure !";
    };
    echo '<hr>';
// avec la  condition if /else afficher si on est le matin  l'apres midi ou le soir 
$a = 20;
$b = 5 ;
$c1 = 10;
$c2 ='10'; 
 if( $c1 !=3)
 { 
     echo 'La variable $b n\'est pas egale a 3';
    }
    //Tester $c1 et $c2 avec == et === 
    if ($c1 == $c2){
    echo 'Test ==';}
    if( $c1 === $c2);{
        echo 'Test ===';
    }
if($c1!==10){
    echo 'Test !==';
}
echo '<hr>';
   // ===============
   // swich /case
   //================
   $couleur = 'reed';
   switch($couleur)
   {
       case 'reed':
       echo 'votre couleur favorite est le rouge';
       break;
       case 'blue':
       echo 'votre couleur favorite est  le bleu';
       break;
       case'vert':
       echo' votre couleur favorite est le vert ';
       break;
       case' jaune':
       case'green':
       default:
       echo " votre couleur favorite est ni le rouge ,ni le vert ,ni le bleue";

       //=============
       
       
    };
    echo '<hr>';
    $food ='cake';
    $return_value = match($food)
    {
        'apple' => 'this food is a apple' ,
        'bar'=>' this food is a bar',
        'cake' => 'this food is a cake' ,
    
    
    };
    echo '<hr>';
    //var_dump($return_value);
    
    
    //================
    //empty/isset
    //================
     $var1 = 45 ;
     $var2 = '';
     // empty test si la valeur de la variable est vide : 0 , " , null , false  ou non definit 
     if( empty($var1)){
         echo 'la variable est vide';

     }else
     {var_dump(empty($var2));
     };
     //isset test si la variable est defini et a une valeur null
     // if $(isset($var2)){
     //echo 'Test';
    //}
    $article = [];
   // faire une condition sur ce tableau :tester l'article a l'index 0 si il est non vide , sinon 
    //afficher 'il n'y a pas d'article '
    //creer une branche article ,que vous fusionnerez avec main losrque l'exercice est finit.
    echo '<hr>';
    if(!empty($articles[0])){
        echo $articles[0];

    }else{
        echo "il n'a pas articles !";

    }
    echo '<hr>';
    // operateur ternaire 
    // condition ? true :false
    echo !empty($articles[0]) ? $articles[0]: "il n' y pas d'articles";
   $premierArticle=  !empty($articles[0]) ? $articles[0]: "il n' y pas d'articles";
      echo $premierArticle;
    ?>
