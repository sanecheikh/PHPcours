<?php
// loops 

//while
$j = 0;
 while ($j <= 10){
     //echo $j .'_' +1;
     $j++;
 }
 // avec une boucle while afficher toutes les annees de 1970 a aujourd'hui une liste ul 
 //afficher  le nombre de jour depuis 1970
 //travailler dans une branche annee.
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>boucle while</title>
 </head>
 <body>

 <ul>
     <?php
    
     $i =1970;
     $j= 2022;
     $nbjour =0;
     while($i <= $j){
         ?>
         <li><?<php> echo$i,?>
         <?php
         $nbjour += 365;
         $i++;
     }; 
     ?>
     <li> le nombre de jour dpuis 1970 est de : <strong><?=$nbjour -365 ;?></strong></li>
    </ul>

 

 
 

     
 </body>
 </html>
 <?php
 //================
 //do while
 //================
//  $y = 0;
//  $k =10;
//  do { 
//      echo  "Nombre : $y<br>";
//       $y++;
//       $k--;
//  }
//  while ($y >= 10);
//  echo '<br>';
//  echo  '<br>'.$k.'<br>';


 //==========
 //foreach
 //============
 $tabs = [ 1,2,3,4,5];

 foreach($tabs as $tab){
     echo 'Nombre est : '.$tab.'<br>';
 };/* 
 $tabs2 =[ 'Article1 ','Article2', 'Article3'];
 foreach( $tabs2 as $index =>$article){
     //echo "$insex  - $article<br>";
     echo "${index}  - ${ article}<br>";

 };
 foreach ($tab3 as $key => $value){
     echo "$key : $value<br>";

 };
 // ave une boucle for afficher les nombres de 34 et 89  separer par une virgule , l'affichage ne doit pas se terminer par une virgule.
 */
?>
  
 

 