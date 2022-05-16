<?php
/*
<
>
<=
>=
=
==
===
!=
!==
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




echo <'hr'>;
$heure =date (H);
echo $heure.'<br>'
// avec la  condition if /else afficher si on est le matin ou le soir 
if ($heure <=12)

    echo "c'est le matin ,il est $heure !";
    elseif($heure<=16){
        echo " c'est l'apres midi ,il est $heure !";
    } else {
        echo "c'est le soir ,il est $heure !";
    };


?>
