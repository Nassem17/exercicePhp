<?php


// Parcourir le tableau et retourner le nombre de fois ou est
// le mot voiture




$tab = array('voiture', 'cinema', 'avion', 'voiture');

$count = 0;

for ($numero=0; $numero <=3; $numero++)

{
if ( $tab[$numero] == 'voiture')

{
   $count++;
}


}

echo $count;





 ?>
