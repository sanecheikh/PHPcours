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
  //for($i= 0 ,$i<count($tableau2);$i++){
    //echo $tableau2[$i].'<br>';

  //} 
   $fruits = [ 'banane','kiwi','pomme', 'poire'];
   $html = '';
    
    for ( $i =0 ; $i<count($fruits);$i++){
      $html .= $fruits[$i].'<.>';
    }
    echo $html;
    foreach( $fruits as $value)
    //foreach( $fruits as $value)
    {
      echo $value .'<br>';
    }
    //construire un tableau $nombre  a l'aide la boucle for contenant des nombres de 34 a 78 
     $tab =array();
    //$tab[]=34 
    
     for ($i =0 ;$i<43;$i++) {
        array_push($tab,$i+34);
     } 
     var_dump($tab);

     echo
      '</pre>'
    
?>