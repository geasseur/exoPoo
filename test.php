<?php
//vue utilisateur livre
function chargerClasse($classe){
  require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}
        spl_autoload_register('chargerClasse');
        $moi = new Utilisateur([
          'id' => 0,
          'nom'=>'baptiste',
          'livreEmprunter'=>'ravage'
        ]);
        $moi->setNom('sam');
        $livre = new Livre([
          'id'=>0,
          'nbpages'=>300,
          'libre'=>1,
          'auteur'=>'bajavel'
        ]);
        // $livre->hydrate([
        //   'id'=>0,
        //   'nbpages'=>300,
        //   'libre'=>1,
        //   'auteur'=>'bajavel'
        // ]);
        $moi->emprunterLivre($livre, $moi);
        var_dump($moi);
        var_dump($livre);
