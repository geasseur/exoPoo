<?php
function chargerClasse($classname)
{
  require $classname.'.php';
}

spl_autoload_register('chargerClasse');

if (!isset($_SESSION['connexion']))
{
  $connexion = new Connexion('localhost', 'root', 'root', 'logicielchantier');
  $_SESSION['connexion'] = $connexion;
  var_dump($connexion);
  echo 'Actualisez la page !';
}

else
{
  echo '<pre>';
  var_dump($_SESSION['connexion']); // On affiche les infos concernant notre objet.
  echo '</pre>';
}
// $fh = fopen('test.txt','a+'); // Ouverture d'un fichier en lecture/écriture, en le créant s'il n'existe pas.
// $serialize = unserialize($srzed);
// fwrite($fh,$srzed); // On écrit.
// fclose($fh); // On ferme.

// $obj = new MaClasse;
//
// $obj->methodeTest(123, 'merde', 'test');
// MaClasse::methodeStatique(456, 'autre test');
// $notes = array('maths'=>7,'anglais'=>3,'svt'=>8,'algo'=>9); // Formation d'un array pour la forme
// $serialize = serialize($notes); // echo du résultat de serialize() sur cet array
// echo '<pre>';
// print_r(unserialize($serialize));
// echo '</pre>';
// $obj->attribut = 'Simple test';
// $obj->unAttributPrive = 'Autre simple test';
// //$obj->unAutreAttribut = 'Autre simple test';
//
// if (isset($obj->attribut)){
//   echo 'L\'attribut <strong>attribut</strong> existe !<br />';
// }
//
// else{
//   echo 'L\'attribut <strong>attribut</strong> n\'existe pas !<br />';
// }
//
// if (isset($obj->unAutreAttribut)){
//   echo 'L\'attribut <strong>unAutreAttribut</strong> existe !';
// }
//
// else{
//   echo 'L\'attribut <strong>unAutreAttribut</strong> n\'existe pas !';
// }
//
// unset($obj->attribut);
//
// if (isset($obj->attribut)){
//   echo 'L\'attribut <strong>attribut</strong> existe !<br />';
// }
//
// else{
//   echo 'L\'attribut <strong>attribut</strong> n\'existe pas !<br />';
// }
//
// if (isset($obj->unAutreAttribut)){
//   echo 'L\'attribut <strong>unAutreAttribut</strong> existe !';
// }
// else{
//   echo 'L\'attribut <strong>unAutreAttribut</strong> n\'existe pas !';
//}
 ?>
