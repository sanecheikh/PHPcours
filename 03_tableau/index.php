<?php
//tableau indexe
// declaration d'un tableau 
$tableau =array();
$tableau = [];
$tableau2 =array ( 'Lundi' ,'Mardi' ,45 ,67 ,8 ,False );
$tableau = [true ,45,'Terre' ,56, [ 45,67,78]];
$tableau = [
  true ,
  45,
  'Terre' ,
  56,
  [45, 67 ,78]

];

echo '<pre>';
//print_r ($tableau2);
 $tableau[ ] = 'JAnvier';
 $tableau[] = 45;
 $tableau[ ]= false;
 var_dump($tableau);
 array_push($tableau ,'voiture ');//ajout de voiture au tableau 
 array_push($tableau ,'voiture 1', 'voiture2');
 echo count ($tableau ); // nombre d'elements dsans un taleau 
 echo '<hr>';

  echo $tableau [0];

  $notes = [12,5,16,7]; 
  //Afficher les moyennes des notes

   $sommeNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
   $moyenne = $sommeNotes  /4;
   echo $moyenne ;

  
  $tab3 = array_merge($tableau2,$tableau,$notes);
  //assembler les tableaux
  var_dump($tab3);
  echo '</pre>';
?>