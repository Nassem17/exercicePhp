<?php



// Créer une boucle foreach avec une variable qui va calculer la somme des elements du tableau


//
// $tab = array(5, 6, 7, 8, 12, 26 );
//
// $total = 0;
//
//    foreach ($tab as $val) {
//    $total += $val;
//    }
//
//
//
// echo $total;
//



// Faire la moyenne de ces sommes en utlisant foreach


$tab = array(5, 6, 7, 8, 12, 26 );

$somme = 0;
$count = 0;



   foreach ($tab as $val) {

   $somme += $val;

   $count ++;


   }

$moyenne = $somme/$count;

echo $moyenne;












 ?>
