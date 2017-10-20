<?php
function chargerClasse($classname)
{
  require $classname.'.php';
}

spl_autoload_register('chargerClasse');

$client = new Client([
  'adresse'=>'5 allée des érables',
  'nom'=>'ventura',
  'prenom'=>'baptiste'
]);

$client->getCord();

var_dump($client);

$votant = new Electeur([
    'adresse'=>'5 allée des érables',
    'nom'=>'ventura',
    'prenom'=>'baptiste',
    'bureauDeVote'=>'roubaix sud'
]);
$votant->aVote(' a voté ');
var_dump($votant);
 ?>
