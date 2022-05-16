<?php
$personne1= [
    'prenom' =>'Carle',
    'nom' =>'awa',
     'email' =>  'carle@hotmail.fr'
];
$people = [
    $personne1,
    [
        'prenom'=> 'Mouhamed',
        'nom' => 'pascal',
        'email' => 'omarsane10@gmail.com'

    ],
    [
         'prenom' => 'david' ,
         'nom ' =>' Lucie' ,
         'email' => 'lucie@yahoo.fr'
        ]
    ];

 echo '<pre>' ;
    print_r($people);
    //afficher l'email et le nom de famille de Lucie
    //echo 'L\'email de Lucie est ' .$people[2]['nom'] .PHP_EOL;
    //echo 'L\email de Lucie est  '  .$people[2]['email'] ;
    
    echo'<hr>' ;
    
     $json_file = json_encode($people);
     //echo $json_file;
      
     $json_obj = '{
         "nom " : "Durand",
         "prenom": "Michel",
         "email":"dumi@gmail.com"
     }';
     print_r($json_obj);
     echo'<hr>';
     $json_array_php = json_decode($json_obj);
     print_r($json_array_php);


     echo'</pr>';

?>