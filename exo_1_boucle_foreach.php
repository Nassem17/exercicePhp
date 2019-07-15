<?php


 //
 // Utilisation du foreach :


// Parcourir le tableau $tab jusqu'a rencontrer
// le prenom "David" une fois rencontré afficher "prenom trouvé"



$tab = array ('Jean', 'Baptiste', 'Poquelin', 'David', 'Vanessa');




foreach($tab as $element)

{ if ($element =='David')

   echo $element .' Prénom Trouvé <br />';

}







?>
