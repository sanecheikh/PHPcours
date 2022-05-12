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
     $nombres =array();
    //$tab[]=34 
    
     for ($i =34 ;$i<78;$i++) {
        array_push($nombres,$i);
     } 
     
     //tableau associatif 
     $fruits = ['banane '=> 'jaune','pomme'=>'rouge', 'kiwi'=>'vert'];
     print_r($fruits);
     //echo 'la couleur d une Pomme est' .$fruits['rouge'];
     echo 'La longueur du tableau $fruits est de :'.sizeof($fruits);

    $ages = [ 'Muchel' =>34 , 'Lucie'=> 12 ,' Mouloud '=>56];
    print_r($ages);
    $chaine =implode('.',$ages);
    //transformer une chaine de caractere en un tableau en prcisant de limiter;
    // assemble les valeurs du tableaux en chaine de caractere;
    echo $chaine;
    echo'</br>';
     $ages['paul'] =22 ;
     //ajouter nouvel element au tableau  $age ;
     $ages['Lucie'] = 02;
     //modifiacation du tableau $age;
      print_r($ages);
      foreach($ages as $clef =>$valeur)
       // echo $clef . 'a' .$valeur .'ans<br>';
     // }
     $html = '<ul>';
     foreach($ages as $key =>$value){
       $html .= '<li>' .$key .'a'  .$value .'ans</li>';
     }
     $html .='</ul>';
     echo $html;
     // Creer un tableau $notes avec un prenom => une note
// Afficher une liste ul des eleves et leur notes
// Marc a obtenu 15/20
$not = [ 'Marc' =>15];
    print_r($not);
    $html = '<ul>';
     foreach($not as $key =>$value){
       $html .= '<li>la note de physique ' .$key .' est  '  .$value .'/20</li>';
     }
     $html .='</ul>';
     echo $html;

     
 echo
      '</pre>'
    
?>