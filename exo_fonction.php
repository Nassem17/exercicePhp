
<?php
/**
* Faire une fonction qui recoit en parametre un tableau et retourne
* le nombre d'elements du tableau (comme la fonction count)
*
*/





//Squelette de la fonction

// function getNbElement($tab)
//
// {
//
// echo count($tab);
//
// }
// $myTab = array('element1', 'element1', 'element1' );
// //doit retourner 3
// echo getNbElement($myTab);
//
//
//

// Utilisation du foreach :


function getNbElement($tab)

{
$count =0;

foreach ($tab as $element)

{
   $count++;
}



echo ($count);

}
$myTab = array('element1', 'element1', 'element1' );
//doit retourner 3
echo getNbElement($myTab);



function getNbElement($tab)

{
  $count = 0;

  foreach ($tab as $element)

  {
    $count++;
  }

  echo ($count);



}











?>
