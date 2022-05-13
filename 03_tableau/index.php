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
$not = ['Marc' =>15,
       ' Ptrick' =>12,
      'Paul' => 10];
    print_r($not);
    $html = '<ul>';
     foreach($not as $key =>$value){
       $html .= '<li>la note de physique ' .$key .' est  '  .$value .'/20</li>';
     }
     $html .='</ul>';
     echo $html;
     $tab4 = array_merge($ages,$not);
     print_r($tab4);
     $planetes = ['mars','terre','pluiton','venus','jupiter'];
     print_r($not);
     asort($planetes);
     echo '<hr>';
     //asort($planetes); //tri des valeurs d'un tableau par ordre croissan
      // asort($notes); 
// rsort($notes); // tri tableau par ordre decroissant
// ksort($notes); // tri tableau en fonction des clefs par ordre croissant
// arsort($notes); // tri tableau en fonction des valeurs par ordre decroissant
// krsort($notes); // tri en fonction des clefs par ordre decroissant

// print_r($planetes);
// print_r($notes);

// Créer un tableau avec les mois de l'annnée
// - afficher la valeur de la 5 ligne de ce tableau
// - afficher la vleur de l'index 10
// - modifier le mois d'avril en le mettant en majuscule

// Créer un tableau associatif des departements de la region normandie
// avec le nom du departement en valeur et son code postale en index
// - afficher la valeur de l'index 27
// - ajouter le departement et code postale de la ville de Brest
// - parcourir le tableau des departements et afficher chaque departement dans un parapraphe p de la façon suivante :
// Le 'nom du departement' possede le code postale suivant :  'code pastale'


$mois = ['janvier ','fevrier','mars','avril','mai','juin', 'juillet','aout','septembre','octobre', 'novembre','decembre'];
print_r($mois);
echo 'la 5 ligne de ce tableau  est : '.$mois[4] .'</br>';
echo 'la valeur de l\'index 10 est : ' .$mois[10] .'</br>';



 echo '<hr>';
  
 $departements = [14=>'Calvados', 76=>'seine maritime ',61=>'Orn', 50=>'Manche ',27 => 'Eure',];
 print_r($departements);
echo '<hr>';
echo 'la valeur de l\'index 27est : ' .$departements[27] .'</br>';
//$departements[29]= 'finister';
$departements +=[29=>'finister'];
echo '<hr>';
print_r($departements);
echo '<hr>';
foreach($departements as $key => $value)
    {
      echo '<p>' .ucfirst($value) .'possede le code postale suivant :'. $key .'<p>';
    }
$tab = [ 
  'voiture' => 'ford' ,
  'nombre '=> [ 1,2,3,4],
  'planete' => ['mars' ,'terre']
];
$tab = [];
$tab [] =['A','B','C'];  
$tab [] = ['Q','R','T'];  
$tab [] =['E','U','P','I']; 
print_r($tab);
echo '<hr>';
//echo $tab['planete'][0];
//Ecrire le mot CEPPIC 

  echo $tab[0][2].$tab[2][0].$tab[2][2].$tab[2][2].$tab[2][3].$tab[0][2];
 

 echo
      '</pre>'
    
?>