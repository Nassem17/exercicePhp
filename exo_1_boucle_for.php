<?php

            // Utilisation de la boucle "for" :





  // Parcourir le tableau $tab jusqu'a rencontrer
  // le prenom "David" une fois rencontré afficher "prenom trouvé"

 $tab = array('Jean', 'Baptiste', 'Poquelin', 'David', 'Vanessa');

 // Puis on fait une boucle pour tout afficher :

 for ($numero = 0; $numero <= 4; $numero++)

 {

    if ($tab[$numero] =='David')
    {
     echo  $tab[$numero] .' Prénom Trouvé   <br /> '; // affichera $prenoms[0], $prenoms[1] etc.

    }



}







?>
