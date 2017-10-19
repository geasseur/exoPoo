<?php
require "exo2S2.php";
require "controleurChat.php";
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
        <?php foreach ($chats as $donnees) {
          ?>
          <article class="">
            <h2><?php echo $donnees['nom'];?></h2>
            <p><?php echo $donnees['age'] ?></p>
            <p><?php if ($donnees['sexe'] == 0) {
              echo 'femelle';
            } ?></p>
            <p><?php echo $donnees['pelage'] ?></p>
          </article>
          <?php
        } ?>
