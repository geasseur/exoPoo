<?php
// function chargerClasse($classe){
//   require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
// }
//         spl_autoload_register('chargerClasse');
//         $moi = new Utilisateur(0, 'baptiste', 'ravage');
//         $moi->setNom('sam');
//         $livre = new Livre(1, 300, 'libre', 'barjavel');
//         $moi->emprunterLivre($livre);
//         var_dump($moi);
//         var_dump($livre);

require "exoS2.php";
require "controleurChat.php";

//controleur
        ?>

        <form class="" action="" method="post">
          <label for="">Nouveau Chat</label><br>
          <label for="">nom</label>
          <input type="text" name="nom" value=""><br>
          <label for="">age</label>
          <input type="text" name="age" value=""><br>
          <label for="">sexe : </label><br>
          <label for="male">male</label>
          <input type="radio" id="male" name="sexe" value="male">
          <label for="femelle">femelle</label>
          <input type="radio" id="femelle" name="sexe" value="femelle"><br>
          <label for="">pelage : </label><br>
          <label for="">brun</label>
          <input type="radio" name="pelage" value="brun">
          <label for="">noir</label>
          <input type="radio" name="pelage" value="noir">
          <label for="">blanc</label>
          <input type="radio" name="pelage" value="blanc">
          <label for="">gris</label>
          <input type="radio" name="pelage" value="gris"><br>
          <input type="submit" name="" value="valider">
        </form>
